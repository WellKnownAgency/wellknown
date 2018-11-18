@extends('layout.mainblog')

@section('title', "$post->seotitle")

@section('description', "$post->dscr")

@section('keywords', '')

@section('preload')
<link rel="preload" href="/images/blog/{{ $post->image }}" as="image">
@stop

@section('customcss')
<meta property="og:image" content="/images/blog/{{ $post->image }}" />
<style>
.button-container {
  text-align: center;
  margin-top: -112px;
  position: relative;
  z-index: 100;
}
</style>
@stop

@section('content')
<div class="wrapper">
    <div class="page-header page-header-small">

    <div class="page-header-image" data-parallax="true" style="background-image: url(/images/blog/{{ $post->image }}); transform: translate3d(0px, 0px, 0px);">
    </div>


    <div class="content-center">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto text-center">
                <h1 class="title">{{ $post->title }}</h1>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="button-container">
                  <a href="#pablo" class="btn btn-primary btn-round btn-lg">
                      <i class="now-ui-icons text_align-left"></i> Read Article
                  </a>

                  <a href="#pablo" class="btn btn-icon btn-lg btn-twitter btn-round">
                      <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-icon btn-lg btn-facebook btn-round">
                      <i class="fab fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-icon btn-lg btn-google btn-round">
                      <i class="fab fa-google"></i>
                  </a>
              </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                  {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>

    <div class="section section-blog-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">

                    <div class="row">
                        <div class="col-md-6">
                            <a href="#pablo" class="btn btn-google btn-round pull-right">
                                <i class="fab fa-google"></i> 232
                            </a>
                            <a href="#pablo" class="btn btn-twitter btn-round pull-right">
                                <i class="fab fa-twitter"></i> 910
                            </a>
                            <a href="#pablo" class="btn btn-facebook btn-round pull-right">
                                <i class="fab fa-facebook-square"></i> 872
                            </a>
                        </div>
                    </div>

                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-comments">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="media-area">
                        <h3 class="title text-center">3 Comments</h3>
                        <div class="media">
                            <a class="pull-left" href="#pablo">
                                <div class="avatar">
                                    <img class="media-object img-raised" src="../assets/img/james.jpg" alt="...">
                                </div>
                            </a>
                            <div class="media-body">
                                <h5 class="media-heading">Tina Andrew <small class="text-muted">· 7 minutes ago</small></h5>

                                <p>Chance too good. God level bars. I'm so proud of @LifeOfDesiigner #1 song in the country. Panda! Don't be scared of the truth because we need to restart the human foundation in truth I stand with the most humility. We are so blessed!</p>
                                <p>All praises and blessings to the families of people who never gave up on dreams. Don't forget, You're Awesome!</p>

                                <div class="media-footer">
                                    <a href="#pablo" class="btn btn-primary btn-neutral pull-right" rel="tooltip" title="" data-original-title="Reply to Comment">
                                        <i class="now-ui-icons ui-1_send"></i> Reply
                                    </a>
                                    <a href="#pablo" class="btn btn-danger btn-neutral pull-right">
                                        <i class="now-ui-icons ui-2_favourite-28"></i> 243
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                          <a class="pull-left" href="#pablo">
                              <div class="avatar">
                                 <img class="media-object img-raised" alt="Tim Picture" src="../assets/img/michael.jpg">
                              </div>
                          </a>
                          <div class="media-body">
                             <h5 class="media-heading">John Camber <small class="text-muted">· Yesterday</small></h5>

                             <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                             <p> Don't forget, You're Awesome!</p>

                             <div class="media-footer">
                                 <a href="#pablo" class="btn btn-primary btn-neutral pull-right" rel="tooltip" title="" data-original-title="Reply to Comment">
                                     <i class="now-ui-icons ui-1_send"></i> Reply
                                 </a>
                                 <a href="#pablo" class="btn btn-danger btn-neutral pull-right">
                                     <i class="now-ui-icons ui-2_favourite-28"></i> 25
                                 </a>
                             </div>
                             <div class="media">
                                  <a class="pull-left" href="#pablo">
                                        <div class="avatar">
                                            <img class="media-object img-raised" alt="64x64" src="../assets/img/julie.jpg">
                                        </div>
                                  </a>
                                  <div class="media-body">
                                        <h5 class="media-heading">Tina Andrew <small class="text-muted">· 2 Days Ago</small></h5>

                                        <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                        <p> Don't forget, You're Awesome!</p>

                                        <div class="media-footer">
                                            <a href="#pablo" class="btn btn-primary btn-neutral pull-right" rel="tooltip" title="" data-original-title="Reply to Comment">
                                                <i class="now-ui-icons ui-1_send"></i> Reply
                                            </a>
                                            <a href="#pablo" class="btn btn-danger btn-neutral pull-right">
                                                <i class="now-ui-icons ui-2_favourite-28"></i> 2
                                            </a>
                                        </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                      <h3 class="title text-center">Post your comment</h3>
                      <div class="media media-post">
                          <a class="pull-left author" href="#pablo">
                              <div class="avatar">
                                  <img class="media-object img-raised" alt="64x64" src="../assets/img/olivia.jpg">
                              </div>
                          </a>
                          <div class="media-body">
                                  <textarea class="form-control" placeholder="Write a nice reply or go home..." rows="4"></textarea>
                                  <div class="media-footer">
                                      <a href="#pablo" class="btn btn-primary pull-right">
                                          <i class="now-ui-icons ui-1_send"></i> Reply
                                      </a>
                                  </div>
                          </div>
                      </div> <!-- end media-post -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-plain-cards">
    <div class="container">
      <div class="title">
        <h3>Latest Blog Posts
        </h3>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="card card-blog card-plain">
            <div class="card-image">
              <a href="#pablo">
                <img class="img img-raised rounded" src="/images/img/examples/card-blog6.jpg">
              </a>
            </div>
            <div class="card-body text-center">
              <h6 class="category text-danger">
                <i class="now-ui-icons media-2_sound-wave"></i> Business
              </h6>
              <h5 class="card-title">
                <a href="#nuk">Axel Springer Spends $343M To Buy Business Insider</a>
              </h5>
              <p class="card-description">
                German media giant Axel Springer has announced it’s acquiring online business news publication Business Inside...
              </p>
              <div class="card-footer">
                <a href="#nuk" class="btn btn-primary">Read Article</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card card-blog card-plain">
            <div class="card-image">
              <a href="#pablo">
                <img class="img img-raised rounded" src="/images/img/examples/card-blog6.jpg">
              </a>
            </div>
            <div class="card-body text-center">
              <h6 class="category text-danger">
                <i class="now-ui-icons media-2_sound-wave"></i> Business
              </h6>
              <h5 class="card-title">
                <a href="#nuk">Axel Springer Spends $343M To Buy Business Insider</a>
              </h5>
              <p class="card-description">
                German media giant Axel Springer has announced it’s acquiring online business news publication Business Inside...
              </p>
              <div class="card-footer">
                <a href="#nuk" class="btn btn-primary">Read Article</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="card card-blog card-plain">
            <div class="card-image">
              <a href="#pablo">
                <img class="img img-raised rounded" src="/images/img/examples/card-blog6.jpg">
              </a>
            </div>
            <div class="card-body text-center">
              <h6 class="category text-danger">
                <i class="now-ui-icons media-2_sound-wave"></i> Business
              </h6>
              <h5 class="card-title">
                <a href="#nuk">Axel Springer Spends $343M To Buy Business Insider</a>
              </h5>
              <p class="card-description">
                German media giant Axel Springer has announced it’s acquiring online business news publication Business Inside...
              </p>
              <div class="card-footer">
                <a href="#nuk" class="btn btn-primary">Read Article</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
            </div>
@stop
