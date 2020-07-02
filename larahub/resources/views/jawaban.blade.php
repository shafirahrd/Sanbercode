@extends('layout.master')

@push('styles')
table, form {
  padding: 20px;
}
@endpush

@section('content')
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th>#</th>
      <th>Isi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key => $item)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $item->isi }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<form action="{{ route('jawabanStore',[$pertanyaan_id]) }}" method="POST">
@csrf
  <div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan isi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection