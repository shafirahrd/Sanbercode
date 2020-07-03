@extends('layout.master')

@push('styles')
table, form {
  padding: 20px;
}
@endpush

@section('content')

<div class="container"><center>
    <h1><bold>{{ $pertanyaan->judul }}</bold></h1>
    <h3><bold>{{ $pertanyaan->isi }}</bold></h3></center>
    <p>Tanggal dibuat: {{ $pertanyaan->created_at }}</p>
    <p>Tanggal diubah: {{ $pertanyaan->updated_at }}</p>
</div>

<table class="table table-bordered">
  <thead>                  
    <tr>
      <th>#</th>
      <th>Isi Jawaban</th>
      <th>Tanggal Dibuat</th>
      <th>Tanggal Diubah</th>
    </tr>
  </thead>
  <tbody>
    @foreach($jawaban as $key => $item)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $item->isi }}</td>
      <td>{{ $item->created_at }}</td>
      <td>{{ $item->updated_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection