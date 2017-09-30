@extends('layouts.front1')

@section('heading')
<p>{{ $unit->nama }}</p>
@endsection

@section('tagline')
{{ $unit->nama_lengkap }}
@endsection

@section('content')
<!-- Desc -->
<div class="container sections" id="desc">
	<div class="row">
		<div class="col-md-6">
			<h3><span style="text-transform: uppercase">{{ $unit->nama }}</span></h3>
			<p>{{ $unit->deskripsi }}</p>
		</div>
		<div class="col-md-6 text-center">
			<img src="{{ asset('images/unit/' . $unit->image) }}" class="people"/>
		</div>
	</div>
</div>
<!-- //Desc -->

<!-- Visi -->
<div class="text-center" id="visi">
	<div class="container">
		<h3>VISI</h3>
		<p>{{ $visi->isi }}</p>
	</div>
</div>
<!-- //Visi -->

<!-- Misi -->
<div id="services" class="services">
	<div class="container">
		<h3 class="tittle">MISI</h3>
		<div class="legaltopgrids">
            @foreach($misi as $indexKey=>$a)
            <div class="col-md-6 grid1">
				<h3>{{ $a->judul }}</h3>
				<div class="col-md-2 gridnumber">
					<span>{{ $indexKey+1 }}</span>
				</div>
				<div class="col-md-10 gridinfo">
					<p>{{ $a->isi }}</p>
				</div>
				<div class="clearfix"></div>
			</div>
            @endforeach

		</div>
	</div>
</div>
<!-- //Misi -->

<!-- Counter -->
<div class="services-bottom">
	<div class="container">
		<div class="row">
            @foreach($nilai as $a)
			<div class="col-md-4 text-center">
				<i class="fa fa-heart fa-5x block" aria-hidden="true"></i>
				<h4>{{ $a->judul }}</h4>
				<p>{{ $a->isi }}</p>
			</div>
            @endforeach
		</div>
	</div>
</div>
<!-- //Counter -->

<!-- Galeri -->
<div class="container sections" id="galeri">
	<h3 class="tittle">GALERI</h3>
	<div class="row">
		<div class="col-md-4">
			<img src="images/1.jpg" class="img-responsive"/>
			<h4>PT Undip Maju melakukan Training di Stadion Undip</h4>
		</div>
		<div class="col-md-4">
			<img src="images/1.jpg" class="img-responsive"/>
			<h4>PT Undip Maju melakukan Training di Stadion Undip</h4>
		</div>
		<div class="col-md-4">
			<img src="images/1.jpg" class="img-responsive"/>
			<h4>PT Undip Maju melakukan Training di Stadion Undip</h4>
		</div>
	</div>
</div>
<!-- //Galeri -->
@endsection
