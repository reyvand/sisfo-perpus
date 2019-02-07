@extends('master.layout_main')
@section('title','Daftar Buku - Perpustakaan')
@section('content')
<p class="subtitle is-5">Daftar Buku</p>
<table class="table is-fullwidth is-striped is-hoverable">
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
  	@if(count($buku) < 1)
      <td colspan="5"><center>Data kosong</center></td>
    @else
      
    @endif
  </tbody>
</table>
@endsection