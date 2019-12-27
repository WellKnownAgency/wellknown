<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Auth;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::latest()->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate the data
     $this->validate($request, array(
             'title'         => 'required|max:255',
             'slug'          => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
             'dscr'          => 'required'
         ));
     // store in the database
        $post = new Post;
        $post->title = $request->title;
        $post->seotitle = $request->seotitle;
        $post->slug = $request->slug;
        $post->dscr = $request->dscr;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->featured = 0;
        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;

     if ($request->hasFile('img')) {
       $image = $request->file('img');
       $filename = time() . '.' . $image->getClientOriginalExtension();
       $location = public_path('images/blog/' . $filename);
       Image::make($image)->save($location);
       $post->image = $filename;
     }


     $post->save();

      return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view('admin.posts.show')->withPost($post)->withPosts($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::with('category')->where('id', $id)->first();
      $categories = Category::all();

      return view('admin.posts.edit')->withPost($post)->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->seotitle = $request->input('seotitle');
        $post->slug = $request->input('slug');
        $post->dscr = $request->input('dscr');
        $post->excerpt = $request->input('excerpt');
        $post->body = $request->input('body');
        $post->status = $request->input('status');
        $post->featured = 0;
        $post->category_id = $request->input('category_id');

     if ($request->hasFile('img')) {
       $image = $request->file('img');
       $filename = time() . '.' . $image->getClientOriginalExtension();
       $location = public_path('images/blog/' . $filename);
       Image::make($image)->save($location);
       $post->image = $filename;
     }


     $post->save();

      return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::findOrFail($id);
      $post->delete();

      return 204;
    }

    public function statuschange(Request $request, $id)
    {

      $post = Post::findOrFail($id);
      $post->status = $request->status;
      $post->update();

      return $post;
    }


}
