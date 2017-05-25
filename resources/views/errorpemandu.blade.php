<!DOCTYPE html>
<html>
	<head>
		<title>Error | SILKMM Pra-TD FTIf ITS</title>
		<link rel="shorcut icon" type="image/png" href="favicon.png">
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="{{ url('/css/materialize.min.css') }}"  media="screen,projection"/>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<style type="text/css">
			body {
				display: flex;
				min-height: 100vh;
				flex-direction: column;
			}
			main {
				flex: 1 0 auto;
			}
			@media only screen and (max-width:992px){
				nav .brand-logo {
					margin-left: 0px !important;
				}
			}
		</style>
	</head>
	<body>
		<header>
			<!-- navbar -->
			<nav class="white" role="navigation">
				<div class="nav-wrapper">
					<a id="logo-container" href="{{ url('/') }}" class="brand-logo grey-text text-darken-3" style="font-weight: 200; margin-left: 25px;">SILKMM</a>
					<ul class="right hide-on-med-and-down">
						<li><a href="{{ url('/logout') }}" class="grey-text text-darken-3">Logout</a></li>
					</ul>
				</div>
			</nav>
		</header>

		<main>
			<div class="container">
				<div class="row center" style="margin-top: 130px; margin-bottom: 0px;">
					<h3 style="font-weight: 600;">Halaman Error</h3>
					<h5>Anda tidak mempunyai hak akses ke halaman <strong>pemandu</strong>!</h5>
					<a href="{{ URL::previous() }}" class="btn waves-effect waves-light" style="margin-top: 30px;">Kembali</a>
				</div>
			</div>
		</main>

		<!-- footer -->
		<footer class="page-footer white">
			<div class="container">
				<div class="row center" style="margin-bottom: 0px;">
					<div class="col s12">
						<h6 class="grey-text text-darken-3" style="font-weight: 200;">Supported by:</h6>
						<img src="{{ url('/ftif-logo.png') }}" width="75px" style="padding: 5px">
						<img src="{{ url('/bakor-logo.png') }}" width="75px" style="padding: 5px">
					</div>
				</div>
			</div>
		</footer>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="{{ url('/js/materialize.min.js') }}"></script>
		<script type="text/javascript">
			$( document ).ready(function(){
				$(".button-collapse").sideNav();
			})
		</script>
	</body>
</html>