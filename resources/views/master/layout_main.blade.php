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
		$("#loginForm").click(function() {
		  $(".modal").addClass("is-active");  
		});

		$(".closeModal").click(function() {
		   $(".modal").removeClass("is-active");
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
      		<p class="level-item"><a class="button is-rounded" href="{{ url('/login') }}">Login</a></p>
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