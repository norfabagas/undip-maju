@extends('layouts.back')

@section('breadcrumbs')
<li class="breadcrumb-item">
    <a href="{{ url('/admin') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('/admin/blog') }}">Blog</a>
</li>
<li class="breadcrumb-item active">
    Category
</li>
@endsection

@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#catModal">
  Tambah Category
</button>
<table class="table table-bordered data">
    <tr>
        <td>no</td>
        <td>Category</td>
        <td>Action</td>
    </tr>
    @foreach($category as $indexKey=>$a)
    <tr>
        <td>{{ $indexKey+1 }}</td>
        <td>{{ $a->category }}</td>
        <td>
            <a href="{{ url('/admin/blog/category/' . $a->id . '/delete') }}" class="btn btn-warning" onclick="return confirm('Apakah anda yakin?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

<!-- Modal -->
<div class="modal fade" id="catModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="input">Category name</label>
                <input type="text" name="category" class="form-control" placeholder="Nama Category" required="">
            </div>
            <input type="submit" name="submit" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
@endsection
