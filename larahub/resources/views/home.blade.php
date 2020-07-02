@extends('layout.master')

@push('styles')
table {
  padding: 20px;
}
@endpush

@section('content')
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th>#</th>
      <th>Judul</th>
      <th>Isi</th>
      <th>Jawaban</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key => $item)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $item->judul }}</td>
      <td>{{ $item->isi }}</td>
      <form action="/jawaban/{{ $item->id }}" method="GET">
        <td><button type="submit" class="btn btn-info">Jawaban</button></td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection