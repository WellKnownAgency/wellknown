@section('title', 'Create New Product')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<div id="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>
      </div>
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
        <div class="card" style="width: 100%;">
          <h5 class="card-header">Update Post</h5>
          <div class="card-body">
            <form action="{{action('PostController@update', $post->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
                </div>
                <div class="form-group col-md-6">
                  <label for="title">Seo-Title</label>
                  <input type="text" name="seotitle" class="form-control" id="seotitle" value="{{$post->seotitle}}">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" value="{{$post->slug}}">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputState">Category</label>
                  <select id="inputState" class="form-control" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if ($category->id == $post->category_id) selected @endif >{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="defaultCheck1">
                    Featured
                  </label>
                  <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="dscr">Description</label>
                  <input type="text" class="form-control" name="dscr" id="dscr" value="{{$post->dscr}}">
                </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="image">Upload Image (1920x600)</label>
                <input type="file" class="form-control-file" name="img" id="image">
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">Status</label>
                <select id="inputState" class="form-control" name="status">
                  <option value="DRAFT" @if ($post->status == 'DRAFT') selected @endif>Draft</option>
                  <option value="PENDING" @if ($post->status == 'PENDING') selected @endif>Pending</option>
                  <option value="PUBLISHED" @if ($post->status == 'PUBLISHED') selected @endif>Published</option>
                </select>
              </div>
              </div>
              <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <input type="text" class="form-control" name="excerpt" id="excerpt" value="{{$post->excerpt}}">
              </div>
              <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="Body" name="body" rows="7">{{$post->body}}</textarea>
              </div>

              <button type="submit" class="btn btn-success">Save Changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
@section('customjs')
<script>
  tinymce.init({
         selector: "textarea",
         language: 'ru',
         plugins: [
             "advlist autolink lists link image charmap print preview hr anchor pagebreak",
             "searchreplace wordcount visualblocks visualchars code fullscreen",
             "insertdatetime media nonbreaking save table contextmenu directionality",
             "emoticons template paste textcolor colorpicker textpattern"
         ],
         file_browser_callback: function(field_name, url, type, win) {
            // trigger file upload form
            if (type == 'image') $('#formUpload input').click();
        }
       });
</script>
@stop
