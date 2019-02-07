@extends('master.layout_main')
@section('title','Tambah Penerbit - Perpustakaan')
@section('content')
<p class="subtitle is-5">Tambah Data Penerbit</p>
	<form action="{{ url('/penerbit/add') }}" method="post">
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
					<label class="label">Nama Penerbit</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="text" placeholder="Nama Penerbit" name="nama">
				    <span class="icon is-small is-left">
				      <i class="fas fa-user"></i>
				    </span>
				  </p>
				</div>
				<div class="field">
					<label class="label">Kota Penerbit</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="text" placeholder="Kota Penerbit" name="kota">
				    <span class="icon is-small is-left">
				      <i class="fas fa-user"></i>
				    </span>
				  </p>
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