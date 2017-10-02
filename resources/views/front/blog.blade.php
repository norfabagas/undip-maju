@extends('layouts.front2')

@section('heading')
GALLERY
@endsection

@section('content')
<!-- blog -->
	<div class="services">
		<div class="container">
			<div class="col-md-8 event-left w3-agile-event-left">

                @foreach($blog as $a)
                <div class="event-left1 w3-agile-event-left1">
					<div class="col-xs-6 event-left1-left w3ls-event-left1-left">
						<a href="{{ url('/blog/' . $a->url) }}"><img src="{{ asset('images/blog/' . $a->image) }}" alt=" " class="img-responsive" /></a>
						<div class="event-left1-left-pos w3l-event-left1-left-pos">
							<ul>
								<!-- <li><a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>7 Tags</a></li> -->
								<!-- <li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>341 Likes</a></li> -->
								<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>{{ $a->name }}</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-6 event-left1-right w3-event-left1-right">
						<h4>{{ $a->created_at }}</h4>
						<h5><a href="{{ url('/blog/' . $a->url) }}">{{ $a->title }}</a></h5>
						<p>{!! str_limit($a->content, 20) !!}</p>
					</div>
					<div class="clearfix"> </div>
				</div>
                @endforeach

                {{ $blog->links() }}

			</div>
			<div class="col-md-4 event-right wthree-event-right">
				<div class="event-right1 agileinfo-event-right1">
					<div class="search1 agileits-search1">
						<form action="{{ url()->current() }}" method="get">
							<input type="text" name="s" placeholder="Search here...">
							<input type="submit" value="Send">
						</form>
					</div>
					<div class="categories w3ls-categories">
						<h3>Categories</h3>
						<ul>
                            @foreach($category as $a)
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="{{ url('blog?category=' . $a->id) }}">{{ $a->category }}</a></li>
                            @endforeach
						</ul>
					</div>
					<!-- <div class="posts w3l-posts">
						<h3>Our Cases</h3>
						<div class="posts-grids w3-posts-grids">
							<div class="posts-grid w3-posts-grid">
								<div class="posts-grid-left w3-posts-grid-left">
									<a href="single.html"><img src="images/1.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="posts-grid-right w3-posts-grid-right">
									<h4><a href="single.html">Sed ut perspiciatis unde omnis iste natus</a></h4>
									<ul class="wthree_blog_events_list">
										<li><i class="fa fa-calendar" aria-hidden="true"></i>28/4/2017</li>
										<li><i class="fa fa-user" aria-hidden="true"></i><a href="single.html">Admin</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="posts-grid w3-posts-grid">
								<div class="posts-grid-left w3-posts-grid-left">
									<a href="single.html"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="posts-grid-right w3-posts-grid-right">
									<h4><a href="#">Neque porro quisquam qui dolorem</a></h4>
									<ul class="wthree_blog_events_list">
										<li><i class="fa fa-calendar" aria-hidden="true"></i>12/5/2017</li>
										<li><i class="fa fa-user" aria-hidden="true"></i><a href="single.html">Admin</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="posts-grid w3-posts-grid">
								<div class="posts-grid-left w3-posts-grid-left">
									<a href="single.html"><img src="images/banner.jpg" alt=" " class="img-responsive" /></a>
								</div>
								<div class="posts-grid-right w3-posts-grid-right">
									<h4><a href="#">Nemo enim ipsam voluptatem quia</a></h4>
									<ul class="wthree_blog_events_list">
										<li><i class="fa fa-calendar" aria-hidden="true"></i>4/5/2017</li>
										<li><i class="fa fa-user" aria-hidden="true"></i><a href="single.html">Admin</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div> -->
					<div class="tags tags1 w3layouts-tags">
						<h3>Recent Tags</h3>
						<ul>
                            @foreach($tag as $a)
                            <li><a href="#">{{ $a->tag }}</a></li>
                            @endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //blog -->
@endsection
