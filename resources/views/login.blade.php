<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Masuk | SILKMM Pra-TD FTIf ITS</title>
		<link rel="shorcut icon" type="image/png" href="favicon.png">
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
						<li><a href="{{ url('/') }}"><i class="material-icons teal-text text-lighten-1" style="font-size: 40px;">account_circle</i></a></li>
					</ul>
				</div>
			</nav>
		</header>

		<main>
			<div class="container">
				<div class="row center" style="margin-top: 100px; margin-bottom: 0px;">
					<h3 style="font-weight: 600;">Halaman Login</h3>
				</div>
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s6 offset-s3">
								<input id="username" type="text" class="validate">
								<label for="username">Username</label>
							</div>
							<div class="input-field col s6 offset-s3">
								<input id="password" type="password" class="validate">
								<label for="password">Password</label>
							</div>
							<div class="input-field col s6 offset-s3 center">
								<button class="btn waves-effect waves-light" type="submit" name="action">Masuk</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</main>

		<!-- footer -->
		<footer class="page-footer white">
			<div class="container">
				<div class="row center" style="margin-bottom: 0px;">
					<div class="col s12">
						<h6 class="grey-text text-darken-3" style="font-weight: 200;">Supported by:</h6>
						<img src="ftif-logo.png" width="75px" style="padding: 5px">
						<img src="bakor-logo.png" width="75px" style="padding: 5px">
					</div>
				</div>
			</div>
		</footer>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript">
			$( document ).ready(function(){
				 $(".button-collapse").sideNav();
			})
		</script>
	</body>
</html>