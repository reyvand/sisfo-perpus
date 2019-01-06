@extends('master.layout_main')
@section('title','Ganti Password - Perpustakaan')
@section('content')
<p class="subtitle is-5">Ganti Password</p>
	<form action="{{ url('/user/changepass') }}" method="post">
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
					<label class="label">Password Lama</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="password" placeholder="Password Lama" name="oldpass" autofocus>
				    <span class="icon is-small is-left">
				      <i class="fas fa-user"></i>
				    </span>
				  </p>
				</div>
				<div class="field">
					<label class="label">Password Baru</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="password" placeholder="Password Baru" name="newpass">
				    <span class="icon is-small is-left">
				      <i class="fas fa-key"></i>
				    </span>
				  </p>
				</div>
				<div class="field">
					<label class="label">Konfirmasi Password Baru</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="password" placeholder="Ketik Ulang Password Baru" name="newpass_confirm">
				    <span class="icon is-small is-left">
				      <i class="fas fa-key"></i>
				    </span>
				  </p>
				</div>
				<div class="field">
				  <p class="control">
				    <button class="button is-primary is-rounded is-outlined" type="submit">Perbaharui</button>
				  </p>
				</div>
			</div>
		</div>
	</form>
@endsection