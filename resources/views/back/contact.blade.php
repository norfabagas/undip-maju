@extends('layouts.back')

@section('breadcrumbs')
<li class="breadcrumb-item">
    <a href="{{ url('/admin') }}">Dashboard</a>
</li>
<li class="breadcrumb-item active">
    Contact
</li>
@endsection

@section('content')
<table class="table table-bordered data">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Tanggal</th>
        <th>Action</th>
    </tr>
    @foreach($contact as $indexKey=>$a)
    <tr style="{{ $a->read === 'no' ? 'background-color: #dfdfdf' : '' }}">
        <td>{{ $indexKey+1 }}</td>
        <td>{{ $a->nama }}</td>
        <td>{{ $a->email }}</td>
        <td>{{ $a->subject }}</td>
        <td>{{ $a->created_at }}</td>
        <td>
            <a class="btn btn-primary" href="{{ url('/admin/contact/' . $a->id) }}">
                <i class="fa fa-eye"></i> Lihat pesan
            </a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
