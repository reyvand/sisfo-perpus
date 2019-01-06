@extends('master.layout_main')
@section('title','Daftar Buku - Perpustakaan')
@section('content')
<p class="subtitle is-5">Daftar Buku</p>
<table class="table">
  <thead>
    <tr>
      <th>Kode Buku</th>
      <th>Judul Buku</th>
      <th>Pengarang</th>
      <th>Kategori</th>
      <th>Penerbit</th>
    	@auth
    	<th>Stok</th>
    	@endauth
    </tr>
  </thead>
  <tbody>
  	
  </tbody>
</table>
@endsection