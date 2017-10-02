@extends('layouts.back')

@section('breadcrumbs')
<li class="breadcrumb-item">
    <a href="{{ url('/admin') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('/admin/blog') }}">Blog</a>
</li>
<li class="breadcrumb-item">
    {{ $blog->title }}
</li>
<li class="breadcrumb-item active">
    Edit
</li>
@endsection

@section('content')
<form method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label>Title</label>
        <input type="text" name="title" placeholder="Title" class="form-control" value="{{ $blog->title }}">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control" required="">
            <option value="">---Category---</option>
            @foreach($category as $a)
            <option value="{{ $a->id }}">{{ $a->category }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
        <label>Content</label>
        <textarea name="content">{{ $blog->content }}</textarea>
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>

    <a href="{{ url('/images/blog/' . $blog->image) }}" target="_blank" class="btn btn-primary">View image</a>
    <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
        <label>Post Image</label>
        <input type="file" name="image" class="form-control">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>

    <input type="submit" name="submit" class="btn btn-primary">

</form>
@endsection
