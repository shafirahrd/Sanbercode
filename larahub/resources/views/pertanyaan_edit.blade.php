@extends('layout.master')

@push('styles')
form {
  padding: 20px;
}
@endpush

@section('content')
<div class="container"><center>
    <h1><bold>Edit pertanyaan {{ $pertanyaan->judul }}</bold></h1>
</div>

<form action="{{ route('pertanyaanUpdate',[$pertanyaan->id]) }}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul" value="{{$pertanyaan->judul}}" placeholder="Masukkan judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" id="isi" name="isi" value="{{$pertanyaan->isi}}" placeholder="Masukkan isi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection