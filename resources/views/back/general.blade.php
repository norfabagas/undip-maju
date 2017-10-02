@extends('layouts.back')

@section('breadcrumbs')
<li class="breadcrumb-item">
  <a href="{{ url('/admin') }}">Dashboard</a>
</li>
<li class="breadcrumb-item active">General</li>
@endsection

@section('content')
<form method="post">
    {{ csrf_field() }}

    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label>Title</label>
        <input type="text" name="title" class="form-control" placeholder="Web Title" value="{{ $title->config_value }}">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('tagline') ? 'has-error' : '' }}">
        <label>Tagline</label>
        <input type="text" name="tagline" class="form-control" placeholder="Web Tagline" value="{{ $tagline->config_value }}">
        {!! $errors->first('tagline', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('facebook') ? 'has-error' : '' }}">
        <label>Facebook URL</label>
        <input type="text" name="facebook" class="form-control" placeholder="Facebook URL" value="{{ $facebook->config_value }}">
        {!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('twitter') ? 'has-error' : '' }}">
        <label>Twitter URL</label>
        <input type="text" name="twitter" class="form-control" placeholder="Twitter URL" value="{{ $twitter->config_value }}">
        {!! $errors->first('twitter', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('googleplus') ? 'has-error' : '' }}">
        <label>Google Plus URL</label>
        <input type="text" name="googleplus" class="form-control" placeholder="Google Plus URL" value="{{ $googleplus->config_value }}">
        {!! $errors->first('googleplus', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Alamat Web" value="{{ $alamat->config_value }}">
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('telepon') ? 'has-error' : '' }}">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control" placeholder="Telepon Web" value="{{ $telepon->config_value }}">
        {!! $errors->first('telepon', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label>Email Web</label>
        <input type="email" name="email" class="form-control" placeholder="Web Email" value="{{ $email->config_value }}">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('jamkerja') ? 'has-error' : '' }}">
        <label>Jam Kerja</label>
        <input type="text" name="jamkerja" class="form-control" placeholder="Jam Kerja" value="{{ $jamkerja->config_value }}">
        {!! $errors->first('jamkerja', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group {{ $errors->has('kota') ? 'has-error' : '' }}">
        <label>Kota Domisili</label>
        <input type="text" name="kota" class="form-control" placeholder="Kota Domisili" value="{{ $kota->config_value }}">
        {!! $errors->first('kota', '<p class="help-block">:message</p>') !!}
    </div>

    <input type="submit" name="save" value="Update" class="btn btn-info">
</form>
@endsection
