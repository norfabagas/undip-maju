@extends('layouts.back')

@section('breadcrumbs')
<li class="breadcrumb-item">
    <a href="{{ url('/admin') }}">Dashboard</a>
</li>
<li class="breadcrumb-item active">
    Unit Bisnis
</li>
@endsection

@section('content')
<table class="table table-bordered data">
    <tr>
        <th>No</th>
        <th>Unit Bisnis</th>
        <th>Action</th>
    </tr>
    @foreach($unit as $indexKey=>$a)
    <tr>
        <td>{{ $indexKey+1 }}</td>
        <td>{{ $a->nama }}</td>
        <td>
            <a class="btn btn-default" href="{{ url('/admin/unit/' . $a->id . '/edit') }}"><i class="fa fa-pencil"></i> Edit</a>
            <a class="btn btn-primary" href="{{ url('/admin/unit/misi/' . $a->id) }}">Kelola Misi</a>
            <a class="btn btn-info" href="{{ url('/admin/unit/nilai/' . $a->id) }}">Kelola Nilai</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
