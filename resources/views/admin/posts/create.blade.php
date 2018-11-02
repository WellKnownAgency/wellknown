@section('title', 'Create New Product')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<div id="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="card" style="width: 100%;">
          <h5 class="card-header">
            WellKnown Agency Posts
          </h5>
          <div class="card-body">
            <a href="/admin/posts" class="btn btn-info">All Posts</a>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card" style="width: 100%;">
          <h5 class="card-header">Create New Post</h5>
          <div class="card-body">
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="form-group col-md-6">
                  <label for="title">Seo-Title</label>
                  <input type="text" name="seotitle" class="form-control" id="seotitle" placeholder="Seo-Title">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug">
                </div>
                <div class="form-group col-md-6">
                  <label for="category_id">Category</label>
                  <input type="text" class="form-control" name="category_id" id="category_id" placeholder="Category">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="metatitle">Featured</label>
                  <input type="text" name="featured" class="form-control" id="featured" placeholder="Meta Title">
                </div>
                <div class="form-group col-md-6">
                  <label for="dscr">Description</label>
                  <input type="text" class="form-control" name="dscr" id="dscr" placeholder="Description">
                </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="image">Upload Image (000x000)</label>
                <input type="file" class="form-control-file" name="img" id="image">
              </div>
              <div class="form-group col-md-6">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" id="status">
              </div>
              </div>
              <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <input type="text" class="form-control" name="excerpt" id="excerpt">
              </div>
              <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="Body" name="body" rows="7"></textarea>
              </div>

              <button type="submit" class="btn btn-success">Create</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop