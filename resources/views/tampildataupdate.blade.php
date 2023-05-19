@extends('layouts.app')

@section('content')
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<div class="container">
    <form action="/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Alamat</label>
          <input type="text" name="alamat" value="{{ $data->alamat }}" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Foto Tersangka</label>
            <input type="file" name="foto_tersangka" value="{{ $data->foto_tersangka }}" class="form-control" id="exampleInputPassword1">
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Masa Hukum</label>
            <input type="text" name="masa_hukum" value="{{ $data->masa_hukum }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kasus</label>
            <textarea name="kasus" id="informasi">{{ $data->kasus }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
<script>
    CKEDITOR.replace( 'informasi' );
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection