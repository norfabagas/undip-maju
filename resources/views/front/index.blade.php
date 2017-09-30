@extends('layouts.front1')

@section('heading')
<p><i>Undip Mandiri</i> Aneka Jasa dan Usaha</p>
<p>Pelayanan <i>Terbaik</i> di Setiap Unitnya</p>
<p><i>Undip Mandiri</i> Aneka Jasa dan Usaha</p>
<p>Pelayanan <i>Terbaik</i> di Setiap Unitnya</p>
@endsection

@section('content')

@section('tagline')
{{ $tagline->config_value }}
@endsection

<!-- our lawyers -->
<div class="lawyers agileits-w3layouts-specials" id="lawyers">
	<div class="container">
		<h3 class="tittle">Unit Bisnis</h3>
		<div class="row">
            @foreach($unit as $a)
            <div class="col-md-3 unit-thumbnail">
				<a href="{{ url('/' . $a->url) }}">
					<img src="{{ asset('images/unit/' . $a->image) }}" class="img-rounded"/>
					<h4>{{ $a->nama }}</h4>
				</a>
			</div>
            @endforeach
		</div>
	</div>
</div>
<!-- //our lawyers -->

<!--/reviews-->
	<div id="testimonials" class="testimonials">
		<div class="container">
		<h3 class="tittle">Testimonials</h3>
				<div class="test-monials">
				<!--//screen-gallery-->
						<div class="sreen-gallery-cursual">

						       <div id="owl-demo" class="owl-carousel">
                                   @foreach($value as $a)
                                   <div class="item-owl">
                                      <div class="test-review">
                                          <div class="img-agile">
                                              <img src="{{ asset('images/values/' . $a->image) }}" class="img-responsive" alt=""/>
                                          </div>
                                          <div class="textagile">
                                              <p>{{ $a->isi }}</p>
                                               <h5>{{ $a->nilai }}</h5>
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
				              </div>
						<!--//screen-gallery-->
					</div>
				</div>
			</div>
		</div>
<!--//reviews-->

<!-- footer top -->
<div class="phone1">
	<div class="border">
		<p>Jangan Ragu Menghubungi Kami</p>
		<h3>Hubungi Kami : {{ $telepon->config_value }}</h3>
		<p>Jam kerja {{ $jamkerja->config_value }}</p>
	</div>
</div>
<!-- //footer top -->
@endsection
