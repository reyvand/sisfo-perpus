@extends('master.layout_main')
@section('title','Daftar Penerbit - Perpustakaan')
@section('content')
<p class="subtitle is-5">Daftar Penerbit</p>
<table class="table is-fullwidth is-striped is-hoverable">
  <thead>
    <tr>
      <th>ID Penerbit</th>
      <th>Nama Penerbit</th>
      <th>Kota Penerbit</th>
    </tr>
  </thead>
  <tbody>
  	@if(count($penerbit) < 1)
      <td colspan="3"><center>Data kosong</center></td>
    @else
      @foreach($penerbit as $p)
        <td>{{$p->id}}</td>
        <td>{{$p->penerbit_nama}}</td>
        <td>{{$p->penerbit_kota}}</td>
      @endforeach
    @endif
  </tbody>
</table>
@endsection