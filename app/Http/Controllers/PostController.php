<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
        return view('admin.posts.create');
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
        $post->metatitle = $request->metatitle;
        $post->dscr = $request->dscr;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->featured = $request->featured;
        $post->category = $request->category_id;

     if ($request->hasFile('img')) {
       $image = $request->file('img');
       $filename = time() . '.' . $image->getClientOriginalExtension();
       $location = public_path('images/blog/' . $filename);
       Image::make($image)->resize(900, 450)->save($location);
       $post->image = $filename;
     }


     $post->save();

      return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);
      return view('admin.posts.edit')->withPost($post);
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
        //
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
}
