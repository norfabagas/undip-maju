@extends('layouts.back')

@section('breadcrumbs')
<li class="breadcrumb-item">
    <a href="{{ url('/admin') }}">Dashboard</a>
</li>
<li class="breadcrumb-item active">
    Blog
</li>
@endsection

@section('content')
<a class="btn btn-primary" href="{{ url('/admin/blog/add') }}">Add Post</a>
<table class="table table-bordered data">
    <tr>
        <td>No</td>
        <td>Judul</td>
        <td>Kategori</td>
        <td>Author</td>
        <td>Action</td>
    </tr>
    @foreach($blog as $indexKey=>$a)
    <tr>
        <td>{{ $indexKey+1 }}</td>
        <td>{{ $a->title }}</td>
        <td>{{ $a->category }}</td>
        <td>{{ $a->name }}</td>
        <td>
            <a class="btn btn-default" href="{{ url('/admin/blog/' . $a->url) }}"><i class="fa fa-eye"></i> View</a>
            <a class="btn btn-info" href="{{ url('/admin/blog/' . $a->id . '/edit') }}"><i class="fa fa-pencil"></i></a>
            <a onclick="return confirm('Apakah anda yakin?')" class="btn btn-warning" href="{{ url('/admin/blog/' . $a->id . '/delete') }}"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
