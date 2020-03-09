@section('title', 'Create Case')
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
          <li class="breadcrumb-item"><a href="/admin/cases">Cases</a></li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </div>
      <div class="col-md-9">
        <div class="card" style="width: 100%;">
          <h5 class="card-header">Create New Case</h5>
          <div class="card-body">
            <form action="{{route('cases.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="title">H1 Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="form-group col-md-6">
                  <label for="excerpt">Small Dscr under Title</label>
                  <input type="text" class="form-control" name="excerpt" id="excerpt" placeholder="Excerpt">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug">
                </div>
                <div class="form-group col-md-3">
                  <label for="filter_color">Color</label>
                  <input type="text" class="form-control" name="filter_color" id="filter_color" placeholder="#000">
                </div>
                <div class="form-group col-md-6">
                  <label for="title_work">H2 Title</label>
                  <input type="text" class="form-control" name="title_work" id="title_work" placeholder="Title Work">
                </div>
                <div class="form-group col-md-6">
                  <label for="seotitle">Meta Title</label>
                  <input type="text" class="form-control" name="seotitle" id="seotitle" placeholder="Seo Title">
                </div>
                <div class="form-group col-md-6">
                  <input onblur="textCounter(this.form.recipients,this,150);" disabled  onfocus="this.blur();" tabindex="999" maxlength="3" size="3" value="150" name="counter">
                  <label for="dscr">Meta Description (max: 150)</label>
                  <input onblur="textCounter(this,this.form.counter,150);" onkeyup="textCounter(this,this.form.counter,150);" type="textarea" class="form-control" name="dscr" id="dscr" placeholder="Description">
                </div>
                </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <div class="card" style="box-shadow:none;">
                        <h6 class="card-header">
                          Services
                        </h6>
                        <div class="card-body">
                    @foreach ($caseservices as $caseservice)
                      <div class="form-check form-check-inline" >
                        <input class="form-check-input" type="checkbox" id="{{$caseservice->id}}" value="{{$caseservice->id}}" name="caseservices[]">
                        <label class="form-check-label" for="{{$caseservice->id}}">{{ $caseservice->name }}</label>
                      </div>
                    @endforeach
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <div class="card" style="box-shadow:none;">
                      <h6 class="card-header">
                        Technologies
                      </h6>
                      <div class="card-body">
                    @foreach ($casetechnologies as $casetechnology)
                      <div class="form-check form-check-inline" >
                        <input class="form-check-input" type="checkbox" id="{{$casetechnology->id}}" value="{{$casetechnology->id}}" name="casetechnologies[]">
                        <i for="{{$casetechnology->id}}" class=" {{ $casetechnology->icon }} "></i>
                        <label class="form-check-label" for="{{$casetechnology->id}}">{{ $casetechnology->name }}</label>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="image">Upload Screenshot Image</label>
                <input type="file" class="form-control-file" name="img" id="image">
              </div>
              <div class="form-group col-md-6">
                <label for="header_image">Upload Header Image (1920x600)</label>
                <input type="file" class="form-control-file" name="header_image" id="header_image">
              </div>
              </div>
              <div class="form-group">
                <label for="text">Body</label>
                <textarea class="form-control" id="editor" name="body" rows="20"></textarea>
              </div>

              <button type="submit" class="btn btn-success">Create</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 100%;">
          <h5 class="card-header">
            WellKnown Agency Cases
          </h5>
          <div class="card-body">
            <a href="/admin/cases" class="btn btn-info">All Cases</a>
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
