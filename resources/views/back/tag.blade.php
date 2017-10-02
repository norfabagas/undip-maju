@extends('layouts.back')

@section('breadcrumbs')
<li class="breadcrumb-item">
    <a href="{{ url('/admin') }}">Dashboard</a>
</li>
<li class="breadcrumb-item">
    <a href="{{ url('/admin/blog') }}">Blog</a>
</li>
<li class="breadcrumb-item active">
    Tag
</li>
@endsection

@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#catModal">
  Tambah Tag
</button>
<table class="table table-bordered data">
    <tr>
        <td>no</td>
        <td>Tag</td>
        <td>Action</td>
    </tr>
    @foreach($tag as $indexKey=>$a)
    <tr>
        <td>{{ $indexKey+1 }}</td>
        <td>{{ $a->tag }}</td>
        <td>
            <a href="{{ url('/admin/blog/tag/' . $a->id . '/delete') }}" class="btn btn-warning" onclick="return confirm('Apakah anda yakin?')">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

<!-- Modal -->
<div class="modal fade" id="catModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Tag</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="input">Tag name</label>
                <input type="text" name="tag" class="form-control" placeholder="Nama Tag" required="">
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
