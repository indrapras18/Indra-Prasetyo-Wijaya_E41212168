@extends('layouts.app')

@section('content')
<table class="table container">
    <thead>
      <tr>
        <th scope="col">Nomor</th>
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Foto Tersangka</th>
        <th scope="col">Masa Hukum</th>
        <th scope="col">Masa Hukum</th>
        <th colspan="2">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
     @foreach ($data as $item)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }}</td>
            <td><img src="{{ asset('foto tersangka/'.$item->foto_tersangka) }}" alt=""></td>
            <td>{{ $item->masa_hukum }}</td>
            <td>{!! $item->kasus !!}</td>
            <td>
                <button type="button" class="btn btn-warning"><a style="color:white; text-decoration:none;" href="tampildataupdate/{{ $item->id }}">Ubah</a></button>
                <button type="button" class="btn btn-danger"><a style="color:white; text-decoration:none;" href="delete/{{ $item->id }}">Hapus</a></button>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
@endsection

<style type="text/css">
img{
    width: 200px;
    height: 200px;
}
</style>