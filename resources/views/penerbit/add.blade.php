@extends('master.layout_main')
@section('title','Tambah Penerbit - Perpustakaan')
@section('content')
<p class="subtitle is-5">Daftar Anggota</p>
	<form action="{{ url('/signup') }}" method="post">
		{{ csrf_field() }}
		<div class="columns">
			<div class="column is-7">
				@if(session()->has('error'))
				<div class="field">
					<div class="notification is-warning">{{ session()->get('error') }}</div>
				</div>
				@elseif(session()->has('success'))
				<div class="field">
					<div class="notification is-success">{{ session()->get('success') }} <a href="{{ url('/login') }}">disini</a></div>
				</div>
				@endif
				<div class="field">
					<label class="label">Nama Depan</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="text" placeholder="Nama Depan" name="fname">
				    <span class="icon is-small is-left">
				      <i class="fas fa-user"></i>
				    </span>
				  </p>
				</div>
				<div class="field">
					<label class="label">Nama Belakang</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="text" placeholder="Nama Belakang" name="lname">
				    <span class="icon is-small is-left">
				      <i class="fas fa-user"></i>
				    </span>
				  </p>
				</div>
				<br>
				<div class="field">
					<label class="label">Username</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="text" placeholder="Username" name="username">
				    <span class="icon is-small is-left">
				      <i class="fas fa-user"></i>
				    </span>
				  </p>
				</div>
				<div class="field">
					<label class="label">Password</label>
				  <p class="control has-icons-left">
				    <input class="input is-rounded" type="password" placeholder="Password" name="password">
				    <span class="icon is-small is-left">
				      <i class="fas fa-lock"></i>
				    </span>
				  </p>
				</div>
				<div class="field">
				  <p class="control">
				    <button class="button is-primary is-rounded is-outlined" type="submit">Daftar</button>
				  </p>
				</div>
			</div>
		</div>
	</form>
@endsection