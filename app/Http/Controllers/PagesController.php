<?php

namespace App\Http\Controllers;

use Notification;
use App\Notifications\Comments;
use App\Notifications\Customers;
use Illuminate\Http\Request;
use App\Customer;
use App\Post;
use App\Comment;
use Mail;


class PagesController extends Controller
{
   public function getIndex() {
	   return view('pages/index');
   }

	public function getAdvertising() {
		return view('pages/advertising');
	}

	public function getSearch() {
		return view('pages/search');
	}

	public function getSocial() {
		return view('pages/social');
	}


	public function getWebdesign() {
		return view('pages/web-design');
	}

	public function getAboutus() {
		return view('pages/about-us');
	}

	public function getYourformsubmitted() {
		return view('pages/your-form-submitted');
	}

	public function getPrivacypolicy() {
		return view('pages/privacypolicy');
	}

  public function getContactus() {
    return view('pages/contactus');
  }

  public function postContactus(Request $request) {
    $this->validate($request, [
      'firstname' => 'required',
      'lastname'  => 'required',
      'email'     => 'required|email',
      'phone'     => 'required',
      'website'   => 'required',
      'body'      => 'required'
    ]);

    $customer = new Customer;

		$customer->firstname = $request->firstname;
		$customer->lastname = $request->lastname;
		$customer->phone = $request->phone;
		$customer->email = $request->email;
		$customer->website = $request->website;
		$customer->body = $request->body;


		$customer->save();

    $data = array(
      'firstname' => $request->firstname,
      'lastname'  => $request->lastname,
      'email'     => $request->email,
      'phone'     => $request->phone,
      'website'   => $request->website,
      'body'      => $request->body
    );

    Notification::route('slack', 'https://hooks.slack.com/services/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')->notify(new Customers);

    Mail::send('emails.notification', $data, function($message) use ($data){
      $message->from($data['email']);
      $message->to('info@wknown.com');
      $message->subject('Contact Request');

    });

    Mail::send('emails.contact', $data, function($message) use ($data){
      $message->from('info@wknown.com');
      $message->to($data['email']);
      $message->subject('Contact Request');

    });
    return redirect('/your-form-submitted');
  }

  public function postComment(Request $request, $post_id) {

    $this->validate($request, array(
            'name'      =>  'required|max:255',
            'email'     =>  'required|email|max:255',
            'comment'   =>  'required|min:5|max:2000',
            'g-recaptcha-response' => 'required|captcha'
          ));

        $postss = Post::orderBy('featured', 'desc')->paginate(6);
        $post = Post::find($post_id);
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->post()->associate($post);
        $comment->save();

        Notification::route('slack', 'https://hooks.slack.com/services/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')->notify(new Comments);

        return redirect()->back();

  }

	public function sitemap()
{
    $posts = Post::orderBy('updated_at', 'DESC')->get();
    return response()->view('pages.sitemap', compact('posts'))->header('Content-Type', 'text/xml');
}

}
