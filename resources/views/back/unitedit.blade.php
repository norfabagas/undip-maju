@extends('layouts.back')

@section('breadcrumbs')
<li class="breadcrumb-item">
    <a href="{{ url('/admin') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('/admin/unit') }}">Unit Bisnis</a>
</li>
<li class="breadcrumb-item">
    {{ $unit->nama }}
</li>
@endsection

@section('content')
<form method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label>Nama Unit</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama Unit Bisnis" value="{{ $unit->nama }}">
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('nama_lengkap') ? 'has-error' : '' }}">
        <label>Nama Detail Unit</label>
        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama detail unit bisnis" value="{{ $unit->nama_lengkap }}">
        {!! $errors->first('nama_lengkap', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
        <label>Deskripsi Unit</label>
        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Unit Bisnis">{{ $unit->deskripsi }}</textarea>
        {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
    </div>

    <a target="_blank" href="{{ url('/images/unit/' . $unit->image) }}" class="btn btn-primary">
        <i class="fa fa-folder-open"></i> Lihat gambar
    </a>
    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label>Ganti Gambar Unit</label>
        <input type="file" name="image" class="form-control">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('visi') ? 'has-error' : '' }}">
        <label>Visi Unit</label>
        <input type="text" name="visi" class="form-control" placeholder="Visi Unit Bisnis" value="{{ $visi->isi }}">
        {!! $errors->first('visi', '<p class="help-block">:message</p>') !!}
    </div>

    <input type="submit" name="update" class="btn btn-primary">
</form>
@endsection
