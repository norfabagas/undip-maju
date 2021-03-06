@extends('layouts.back')

@section('breadcrumbs')
<li class="breadcrumb-item">
    <a href="{{ url('/admin') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('/admin/unit') }}">Unit Bisnis</a>
</li>
<li class="breadcrumb-item">
    <a>{{ $unit->nama }}</a>
</li>
<li class="breadcrumb-item active">
    Nilai
</li>
@endsection

@section('content')
<button class="btn btn-info" type="button" data-toggle="modal" data-target="#addNilaiModal">
    tambah nilai
</button>
<table class="table table-bordered data">
    <tr>
        <th>No</th>
        <th>Nilai</th>
        <th>Penjelasan</th>
        <th>Action</th>
    </tr>
    @foreach($nilai as $indexKey=>$a)
    <tr>
        <td>{{ $indexKey+1 }}</td>
        <td>{{ $a->judul }}</td>
        <td>{{ $a->isi }}</td>
        <td>
            <a class="btn btn-warning" href="{{ url('/admin/unit/nilai/' . $a->id . '/delete') }}" onclick="return confirm('Apakah anda yakin?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>


<div class="modal fade" id="addNilaiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="inline-form" method="POST">

            {{ csrf_field() }}

            <input type="hidden" name="id_unit" value="{{ $unit->id }}">

            <div class="form-group">
                <label class="control-label">Nilai</label>
                <input type="text" name="nilai" class="form-control" placeholder="Nilai" required="">
            </div>

            <div class="form-group">
                <label class="control-label">Penjelasan</label>
                <input type="text" name="penjelasan" class="form-control" placeholder="Penjelasan nilai" required="">
            </div>

            <input type="submit" name="save" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
@endsection
