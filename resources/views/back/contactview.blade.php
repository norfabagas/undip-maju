@extends('layouts.back')

@section('breadcrumbs')
<li class="breadcrumb-item">
    <a href="{{ url('/admin') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('/admin/contact') }}">Contact</a>
</li>
<li class="breadcrumb-item active">
    Message
</li>
@endsection

@section('content')
<table class="table">
    <tr>
        <td>Nama</td>
        <td>{{ $message->nama }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $message->email }}</td>
    </tr>
    <tr>
        <td>Subject</td>
        <td>{{ $message->subject }}</td>
    </tr>
    <tr>
        <td>Pesan</td>
        <td>{{ $message->message }}</td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>{{ $message->created_at }}</td>
    </tr>
</table>
@endsection
