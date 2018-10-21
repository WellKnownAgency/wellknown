<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4 ">

	<!-- Blog Facebook Group -->
	<div class="card__blog radius shadowDepth1 card__padding text-center">
		<div class="fb-page" data-href="https://www.facebook.com/WellKnown-153425045259276/?ref=bookmarks" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/WellKnown-153425045259276/?ref=bookmarks" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/WellKnown-153425045259276/?ref=bookmarks">WellKnown</a></blockquote></div>
	</div>

		@foreach($postss as $post)
		<div class="card__blog radius shadowDepth1">
			<div class="card__image border-tlr-radius">
				<a href="/blog/{{ $post->slug }}"><img src="{{ Voyager::image( $post->image ) }}" alt="image" class="border-tlr-radius"></a>
						</div>
			<div class="card__content card__padding">
				<h6 class="category">{{ $post->category->name }}</h6>
				<h6 class="category" style="color: #dc3741 !important;">Featured</h6>
								<div class="card__share">
										<div class="card__social">
												<a class="share-icon facebook" href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com"><span class="fa fa-facebook"></span></a>
												<a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
												<a class="share-icon linkedin" href="#"><span class="fa fa-linkedin"></span></a>
										</div>

										<a id="share" class="share-toggle share-icon" href="#"></a>
								</div>

				<article class="card__article">
					<h4><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
				</article>
			</div>
		</div>

		@endforeach



	<!-- Side Widget Well -->
	<div>

	</div>
</div>
