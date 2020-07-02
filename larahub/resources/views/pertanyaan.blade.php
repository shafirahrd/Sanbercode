@extends('layout.master')

@push('styles')
form {
  padding: 30px;
}
@endpush

@section('content')
<form action="/pertanyaan" method="POST">
@csrf
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan isi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection