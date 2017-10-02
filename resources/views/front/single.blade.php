@extends('layouts.front2')

@section('heading')
{{ $blog->title }}
@endsection

@section('content')
<!-- single -->
	<div class="services">
		<div class="container">
			<div class="col-md-8 single-left">
				<div class="single-left1">
					<img src="{{ asset('images/blog/' . $blog->image) }}" alt=" " class="img-responsive" />
					<h3>{{ $blog->title }}</h3>
					<ul>
						<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="#">{{ $blog->name }}</a></li>
						<!-- <li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span><a href="#">5 Tags</a></li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="#">5 Comments</a></li> -->
					</ul>
					{!! $blog->content !!}
				</div>

			</div>
			<div class="col-md-4 event-right wthree-event-right">
				<div class="event-right1 agileinfo-event-right1">
                    <div class="search1 agileits-search1">
						<form action="{{ url('blog') }}" method="get">
							<input type="text" name="s" placeholder="Search here...">
							<input type="submit" value="Send">
						</form>
					</div>
                    <div class="categories w3ls-categories">
						<h3>Categories</h3>
						<ul>
                            @foreach($category as $a)
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="#">{{ $a->category }}</a></li>
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
										<li><i class="fa fa-calendar" aria-hidden="true"></i>10/12/2016</li>
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
									<h4><a href="single.html">Neque porro quisquam qui dolorem</a></h4>
									<ul class="wthree_blog_events_list">
										<li><i class="fa fa-calendar" aria-hidden="true"></i>12/12/2016</li>
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
									<h4><a href="single.html">Nemo enim ipsam voluptatem quia</a></h4>
									<ul class="wthree_blog_events_list">
										<li><i class="fa fa-calendar" aria-hidden="true"></i>13/12/2016</li>
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
<!-- //single -->
@endsection
