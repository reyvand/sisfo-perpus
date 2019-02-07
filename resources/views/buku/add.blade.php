@extends('master.layout_main')
@section('title','Tambah Buku - Perpustakaan')
@section('content')
<p class="subtitle is-5">Tambah Data Buku</p>
	<form action="{{ url('/buku/add') }}" method="post">
		{{ csrf_field() }}
		<div class="columns">
			<div class="column is-7">
				@if(session()->has('error'))
				<div class="field">
					<div class="notification is-warning">{{ session()->get('error') }}</div>
				</div>
				@elseif(session()->has('success'))
				<div class="field">
					<div class="notification is-success">{{ session()->get('success') }}</div>
				</div>
				@endif
				<div class="field">
					<label class="label">Judul Buku</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="text" placeholder="Nama Buku" name="nama">
				    <span class="icon is-small is-left">
				      <i class="fas fa-book"></i>
				    </span>
				  </p>
				</div>
				<div class="field">
					<label class="label">Kategori Buku</label>
				  <div class="select is-rounded">
						<select name="kategori">
							<option value="edukasi">Edukasi</option>
							<option value="sains">Sains</option>
							<option value="politik">Politik</option>
							<option value="sejarah">Sejarah</option>
							<option value="budaya">Budaya</option>
							<option value="agama">Agama</option>
							<option value="fiksi">Fiksi</option>
							<option value="novel">Novel</option>
							<option value="etc">Lainnya</option>
						</select>
					</div>
				</div>
				<div class="field">
					<label class="label">Nama Pengarang</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="text" placeholder="Nama Pengaramg" name="nama">
				    <span class="icon is-small is-left">
				      <i class="fas fa-user"></i>
				    </span>
				  </p>
				</div>
				<div class="field">
					<label class="label">Penerbit</label>
				  <div class="select is-rounded">
						<select name="penerbit">
						@if(count($penerbit) < 1)
							<option>Belum ada data penerbit</option>
						@else
							@foreach($penerbit as $p)
							<option value="{{$p->id}}">{{$p->penerbit_nama}}</option>
							@endforeach
						@endif
						</select>
					</div>
				</div>
				<div class="field">
				  <p class="control">
				    <button class="button is-link is-rounded is-outlined" type="submit">Tambah</button>
				  </p>
				</div>
			</div>
		</div>
	</form>
@endsection