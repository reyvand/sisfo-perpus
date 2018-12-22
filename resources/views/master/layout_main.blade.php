<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('/icon.svg') }}">
	<link rel="apple-touch-icon" href="{{ asset('/icon.svg') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/bulma/css/bulma.min.css') }}">
	<script defer src="{{ asset('/assets/js/fontawesome_v5.3.1_all.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/assets/js/jquery-3.3.1.min.js') }}"></script>
	<script>
		$(function() {
		  $(".dropdown").hover(function() {
		    $(this).toggleClass("is-active");
		  });
		});
	</script>
</head>
<body>
  <div class="container">
  	<section class="section">
    	<nav class="level">
      	<div class="level-left">
      		<div class="level-item">
      			<span class="icon is-large">
      				<strong><i class="fas fa-2x fa-book-reader"></i></strong>
      			</span>
      		</div>
      		<div class="level-item">
      			<p class="subtitle is-3"><strong>Perpustakaan</strong></p>
      		</div>
      	</div>
      	<div class="level-right">
      		<p class="level-item">
      			@auth
      			<div class="dropdown">
						  <div class="dropdown-trigger">
						    <button class="button is-rounded" aria-haspopup="true" aria-controls="dropdown-menu3">
						      <span class="icon"><i class="fas fa-user"></i></span>
						      <span>{{Auth::user()->user_name}}</span>
						      <span class="icon is-small">
						        <i class="fas fa-angle-down" aria-hidden="true"></i>
						      </span>
						    </button>
						  </div>
						  <div class="dropdown-menu" id="dropdown-menu3" role="menu">
						    <div class="dropdown-content">
						      <a href="#" class="dropdown-item">
						        Profil Saya
						      </a>
						      <a href="#" class="dropdown-item">
						        Ubah Password
						      </a>
						      <a href="{{ url('/signout') }}" class="dropdown-item">
						        Keluar
						      </a>
						    </div>
						  </div>
						</div>
      			@endauth
      			@guest
      			<a class="button is-rounded" href="{{ url('/signin') }}">
      				<span class="icon"><i class="fas fa-sign-in-alt"></i></span>
      				<span>Login</span>
      			</a>
      			@endguest
      		</p>
      	</div>
      </nav>
   	</section>

   	<section class="section">
   		<div class="columns">
				<div class="column is-3">
					<aside class="menu">
						<p class="menu-label"><span class="icon"><i class="fas fa fa-desktop"></i></span>Umum</p>
					  <ul class="menu-list">
					    <li><a href="{{ url('/') }}">Beranda</a></li>
					    <li><a href="{{ url('/peraturan-umum') }}">Peraturan Umum</a></li>
					  </ul>
					  <p class="menu-label"><span class="icon"><i class="fas fa fa-book"></i></span>Buku</p>
					  <ul class="menu-list">
					    <li><a>Daftar Buku</a></li>
					  </ul>
					  <p class="menu-label"><span class="icon"><i class="fas fa fa-portrait"></i></span>Pengarang</p>
					  <ul class="menu-list">
					    <li><a>Daftar Pengarang</a></li>
					  </ul>
					  <p class="menu-label"><span class="icon"><i class="fas fa fa-building"></i></span>Penerbit</p>
					  <ul class="menu-list">
					    <li><a>Daftar Penerbit</a></li>
					  </ul>
					</aside>
				</div>
				<div class="column">
					@section('content')
					@show
				</div>
			</div>
   	</section>

  </div>
</body>
</html>