@extends('layouts.front2')

@section('heading')
TENTANG KAMI
@endsection

@section('content')
<!-- who we are -->
<div class="whom">
	<div class="container">
		<div class="col-md-6 whomleft">
			<div class="whomtop">
				<h4>PT. Undip Mandiri Aneka Jasa dan Usaha</h4>
				<h3 class="tittle">UNDIP MAJU</h3>
			</div>
			<div class="whombottom">
				<p>Di tahun 2017 PT. Undip Maju akan mulai menjalankan roda bisnisnya dengan kegiatan meliputi Agro Industri Peternakan dan Pertanian, Agro Tourism di Kabupaten Batang dan mendirikan lembaga konsultan Psikologi, Engineering serta pengaktifan kembali radio Undip.</p>
				<h3>Badan Usaha Milik Universitas Diponegoro</h3>
				<div class="col-md-4 whomgrid1">
					<i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i>
					<p>Lorem Ipsum dolor sit amet.</p>
				</div>
				<div class="col-md-4 whomgrid1">
					<i class="glyphicon glyphicon-open" aria-hidden="true"></i>
					<p>Lorem Ipsum dolor sit amet.</p>
				</div>
				<div class="col-md-4 whomgrid1">
					<i class="glyphicon glyphicon-hdd" aria-hidden="true"></i>
					<p>Lorem Ipsum dolor sit amet.</p>
				</div>
				<div class="clearfix"></div>
				<div class="w3read">
					<a href="#" data-toggle="modal" data-target="#myModal">kNOW MORE</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 whomright">
			<img src="images/1.jpg" alt="" />
			<div class="img1">
				<img src="images/2.jpg" alt="" />
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //who we are -->

<!-- legal services -->
<div class="legal">
	<div class="container">
		<div class="whomtop">
			<h4>Memiliki Beberapa Unit Bisnis</h4>
			<h3 class="tittle">Unit Bisnis</h3>
		</div>
		<div class="col-md-8 gridleft">

            @foreach($unit as $a)
			<button class="accordion">{{ $a->nama }}</button>
			<div class="panel">
			  <p>{{ $a->deskripsi }}</p>
			</div>
            @endforeach
		</div>
		<div class="col-md-4 gridmiddle">
				<img src="images/judge.jpg" alt="" />
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //legal services -->

<!-- appointment -->
<div class="appointment">
	<div class="layer1">
		<div class="container">
			<h3 class="tittle">Undip Mandiri Aneka Jasa dan Usaha, Pelayanan Terbaik Di Setiap Unitnya</h3>
			<div class="w3read1">
				<!-- <a href="#" data-toggle="modal" data-target="#myModal1">Book an appointment</a> -->
			</div>
		</div>
	</div>
</div>
<!-- //appointment -->

<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					UNDIP MAJU
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
					<div class="modal-body">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<p>Di tahun 2017 PT. Undip Maju akan mulai menjalankan roda bisnisnya dengan kegiatan meliputi Agro Industri Peternakan dan Pertanian, Agro Tourism di Kabupaten Batang dan mendirikan lembaga konsultan Psikologi, Engineering serta pengaktifan kembali radio Undip.</p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up -->
@endsection
