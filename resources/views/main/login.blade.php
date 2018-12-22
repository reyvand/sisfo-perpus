@extends('master.layout_main')
@section('title','Login - Perpustakaan')
@section('content')
<p class="subtitle is-5">Login</p>
	<form action="{{ url('/login') }}" method="post">
		{{ csrf_field() }}
		<div class="columns">
			<div class="column is-6">
				<div class="field">
				  <p class="control has-icons-left has-icons-right">
				    <input class="input is-rounded" type="text" placeholder="Username" name="username">
				    <span class="icon is-small is-left">
				      <i class="fas fa-user"></i>
				    </span>
				  </p>
				</div>
				<div class="field">
				  <p class="control has-icons-left">
				    <input class="input is-rounded" type="password" placeholder="Password" name="password">
				    <span class="icon is-small is-left">
				      <i class="fas fa-lock"></i>
				    </span>
				  </p>
				</div>
				<div class="field is-grouped">
				  <p class="control">
				    <button class="button is-primary is-rounded is-outlined" type="submit">Login</button>
				  </p>
				</div>
			</div>
		</div>
	</form>
@endsection