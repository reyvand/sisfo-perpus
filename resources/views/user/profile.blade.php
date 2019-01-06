@extends('master.layout_main')
@section('title','Profil Saya - Perpustakaan')
@section('content')
<p class="subtitle is-5">Profil Saya</p>
	<form action="{{ url('/user/profile') }}" method="post">
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
					<label class="label">Nama Depan</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="text" placeholder="Nama Depan" name="fname" value="{{ $my->user_fname }}">
				    <span class="icon is-small is-left">
				      <i class="fas fa-user"></i>
				    </span>
				  </p>
				</div>
				<div class="field">
					<label class="label">Nama Belakang</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="text" placeholder="Nama Belakang" name="lname" value="{{ $my->user_lname }}">
				    <span class="icon is-small is-left">
				      <i class="fas fa-user"></i>
				    </span>
				  </p>
				</div>
				<br>
				<div class="field">
					<label class="label">Username</label>
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="text" placeholder="Username" name="username" disabled value="{{ $my->user_name }}">
				    <span class="icon is-small is-left">
				      <i class="fas fa-user"></i>
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