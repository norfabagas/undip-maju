@extends('layouts.back')

@section('breadcrumbs')
<li class="breadcrumb-item">
    <a href="{{ url('admin') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
    User
</li>
@endsection

@section('content')
<a href="{{ url('/admin/user/add') }}" class="btn btn-primary">Tambah User</a>
<table class="table table-bordered data">
    <tr>
        <td>No</td>
        <td>Name</td>
        <td>Email</td>
        <td>Action</td>
    </tr>
    @foreach($user as $indexKey=>$a)
    <tr>
        <td>{{ $indexKey+1 }}</td>
        <td>{{ $a->name }}</td>
        <td>{{ $a->email }}</td>
        <td>
            <a class="btn btn-primary" href="{{ url('/admin/user/' . $a->id . '/edit') }}"><i class="fa fa-pencil"></i></a>
            <a onclick="return confirm('Apakah anda yakin?')" class="btn btn-warning" href="{{ url('/admin/user/' . $a->id . '/delete') }}"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
