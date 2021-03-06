@section('title', 'Create Post')
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
            <a href="/admin/">Dashboard</a>
          </li>
          <li class="breadcrumb-item"><a href="/admin/posts">Posts</a></li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </div>
      <div class="col-md-9">
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
                  <label for="title">Seo Title</label>
                  <input type="text" name="seotitle" class="form-control" id="seotitle" placeholder="Seo Title">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputState">Category</label>
                  <select id="inputState" class="form-control" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-row">

                <div class="form-group col-md-6">
                  <input onblur="textCounter(this.form.recipients,this,160);" disabled  onfocus="this.blur();" tabindex="999" maxlength="3" size="3" value="160" name="counter">
                  <label for="dscr">Description</label>
                  <input onblur="textCounter(this,this.form.counter,160);" onkeyup="textCounter(this,this.form.counter,160);" type="textarea" class="form-control" name="dscr" id="dscr" placeholder="Description">
                </div>
                <div class="form-group col-md-6">
                  <label for="defaultCheck1">
                    Featured
                  </label>
                  <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                  </div>
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
                  <option value="DRAFT" selected>Draft</option>
                  <option value="PENDING">Pending</option>
                  <option value="PUBLISHED">Published</option>
                </select>
              </div>
              </div>
              <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <input type="text" class="form-control" name="excerpt" id="excerpt">
              </div>
              <div class="form-group">
                <label for="text">Body</label>
                <textarea class="form-control" id="editor"  name="body" cols="80" rows="20"></textarea>
              </div>

              <button type="submit" class="btn btn-success">Create</button>
            </form>
          </div>
        </div>
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
    </div>
  </div>
</div>
@stop
@section('customjs')
<script>
  CKEDITOR.replace('editor', {
    height: 300,
  });
</script>
<script>
function textCounter( field, countfield, maxlimit ) {
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  field.blur();
  field.focus();
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}
</script>
@stop
