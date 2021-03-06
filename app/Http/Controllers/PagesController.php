<?php

namespace App\Http\Controllers;

use App\Notifications\NewLead;
use App\Notifications\NewLeadSlack;
use Illuminate\Http\Request;
use App\Lead;
use App\Post;
use App\User;
use App\Comment;
use App\Category;
use App\Scase;
use App\CaseService;
use App\CaseTechnology;
use App\Review;
use Mail;


class PagesController extends Controller
{

	public function postAMP(Request $request)
	{

			
	 // store in the database
			$review = new Review ;
			$review ->rating = $request->rating;
			$review ->name = $request->name;

			$review ->save();

		return response($review)->header('Content-type: application/json','Access-Control-Allow-Origin: *.ampproject.org');
	}

  public function getCalculator() {
    return view('pages/moving-estimate');
  }

   public function getIndex() {
     $posts = Post::latest()->with('category')->where('status', 'PUBLISHED')->take(3)->get();
	   return view('pages/index')->withPosts($posts);
   }

	public function getAdvertising() {
    $posts = Post::latest()->with('category')->where('status', 'PUBLISHED')->take(3)->get();
		return view('pages/advertising')->withPosts($posts);
	}

	public function getSearch() {
    $posts = Post::latest()->with('category')->where('status', 'PUBLISHED')->take(3)->get();
		return view('pages/search')->withPosts($posts);
  }
  public function getSeoboston() {
    $posts = Post::latest()->with('category')->where('status', 'PUBLISHED')->take(3)->get();
		return view('pages/seoboston')->withPosts($posts);
	}
	public function getWebdesign() {
    $posts = Post::latest()->with('category')->where('status', 'PUBLISHED')->take(3)->get();
		return view('pages/web-design')->withPosts($posts);
  }
  
  public function getMovmarketing() {
    $posts = Post::latest()->with('category')->where('status', 'PUBLISHED')->take(3)->get();
		return view('pages/movingmarketing')->withPosts($posts);
	}

  public function getLanding() {
    $posts = Post::latest()->with('category')->where('status', 'PUBLISHED')->take(3)->get();
    return view('pages/landing-pages')->withPosts($posts);
	}

  public function getSocial() {
    $posts = Post::latest()->with('category')->where('status', 'PUBLISHED')->take(3)->get();
    return view('pages/smm')->withPosts($posts);
	}

  public function getCase() {
    $posts = Post::latest()->with('category')->where('status', 'PUBLISHED')->take(3)->get();
    return view('pages/case-studies')->withPosts($posts);
	}

  public function getContentmarketing() {
    $posts = Post::latest()->with('category')->where('status', 'PUBLISHED')->take(3)->get();
    return view('pages/content-marketing')->withPosts($posts);
	}

  public function getWordpressseo() {
    $posts = Post::latest()->with('category')->where('status', 'PUBLISHED')->take(3)->get();
    return view('pages/wordpress-seo')->withPosts($posts);
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

  public function fancyflowers() {
    return view('pages/case/fancyflowers');
  }

  public function borntomove() {
    return view('pages/case/goborntomove');
  }

  public function omdarling() {
    return view('pages/case/omdarling');
  }

  public function blogIndex() {
    $posts = Post::latest()->with('category')->where('status', 'PUBLISHED')->paginate(9);
    return view('blog/index')->withPosts($posts);
  }

  public function postContactus(Request $request) {
    $this->validate($request, [
      'first_name' => 'required',
      'last_name'  => 'required',
      'email'     => 'required|email',
      'phone'     => 'required',
      'website'   => 'required',
      'body'      => 'required'
    ]);

    $lead = new Lead;

		$lead->first_name = $request->first_name;
		$lead->last_name = $request->last_name;
		$lead->phone = $request->phone;
		$lead->email = $request->email;
		$lead->website = $request->website;
		$lead->body = $request->body;
    $lead->note = $request->note;
    $lead->source_id = '1';

		$lead->save();

    $users = User::all();
    foreach ($users as $user) {
      $user->notify(new NewLead($lead));
    }
		// $user->notify(new NewLeadSlack($lead));

    return response($lead);
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

  public function getSingle($slug) {
    $post = Post::where('slug', '=', $slug)->with('user')->first();
    $posts = Post::latest()->where('id', '!=', $post->id)->where('status', 'PUBLISHED')->limit(3)->get();
    return view('blog.single')->withPost($post)->withPosts($posts);
  }

	public function getSingleAmp($slug) {
    $post = Post::where('slug', '=', $slug)->with('user')->first();
    $posts = Post::latest()->where('id', '!=', $post->id)->where('status', 'PUBLISHED')->limit(3)->get();
    return view('blog.amp.single')->withPost($post)->withPosts($posts);
  }


    public function scasesIndex() {
      $scases = Scase::latest()->paginate(9);
      return view('case-studies.index')->withScases($scases);
    }

    public function getSinglecase($slug) {
      $scase = Scase::where('slug', '=', $slug)->with('casetechnologies')->first();
      return view('case-studies.single')->withScase($scase);
    }

}
