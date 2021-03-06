@extends('layout.master')

@push('styles')
table {
  padding: 20px;
}
.btn.btn-success {
  display: inline;
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
      <td>
        <form action="/jawaban/{{ $item->id }}" method="GET">
          <button type="submit" class="btn btn-info">Jawaban</button>
        </form>
        <form action="/pertanyaan/{{ $item->id }}" method="GET">
          <button type="submit" class="btn btn-success">Detail</button>
        </form>
        <form action="/pertanyaan/{{ $item->id }}/edit" method="GET">
          <button type="submit" class="btn btn-warning">Edit</button>
        </form>
        <form action="/pertanyaan/{{ $item->id }}" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection