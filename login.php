<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/icon.css">
	<link rel="stylesheet" href="css/login.css">
	<title>Se connecter</title>
</head>

<body>
	<?php
		$loginType = "login";
		if($_GET['q']){
			$loginType  = $_GET['q'];
			echo "OK\n";
		}
		echo "<p class='text-white'>".$loginType."</p>";
	?>
	<div class="main-container px-md-5 px-4 d-flex justify-content-center align-items-center">
		<div class="login-container bg-main login px-md-4 py-5 rounded-big" style="max-width: 1000px;">
			<h2 class="text-center f-size-26px text-second fw-bold mx-0 mb-4">Connectez-vous pour continuer</h2>
			<div class="row m-0 px-4">
				<form class="row m-0 px-0 py-5 p-lg-5 px-md-5 col-md col-12 justify-content-center" style="z-index:10" action="" method="POST">
					<div class="col-12 px-0 pb-3 position-relative my-4">
						<input class="w-100 bg-main" type="text" name="loginMail" id="login-mail" required>
						<label class="label-hover p-0" for="login-mail">E-mail</label>
					</div>
					<div class="col-12 p-0 position-relative mb-3">
						<input class="w-100 bg-main" type="text" name="loginPassword" id="login-password" required>
						<label class="label-hover p-0" for="login-password">Mot de passe</label>
						<a class="f-size-14px max-content p-0 hov-underline position-absolute" id="forgot-password" style="bottom:-35px ;right:0;" href="#forgotPassword">Mot de passe oublié&nbsp;?</a>
					</div>
					<div class="position-relative col-12 p-0 d-flex  mt-5">
						<input class="d-none" type="checkbox" name="rememberMe" id="remember-me">
						<label class="d-flex" for="remember-me">
							<div class="rounded border-grey-light me-2 overflow-hidden remember-me d-flex align-items-center justify-content-center">
								<span class="d-none icon-check bg-second justify-content-center align-items-center" style="height: 20px;width:20px"></span>
							</div>
							<p class="f-size-14px">Se souvenir de moi</p>
						</label>
					</div>
					<button class="bg-second trans-500 mt-md-5 mt-4 border-second py-2 px-3 text-uppercase fw-semibold w-100" type="submit" style="max-width:300px">Se connecter</button>
				</form>
				<div class="p-0 w-100 d-md-none position-relative" style="border-bottom: solid 2px var(--white)">
					<div class="bg-main absolute-center p-3">
						<p class="f-size-18px">OR</p>
					</div>
				</div>
				<div class="border-white p-0 my-3 d-none d-md-block position-relative" style=" flex:0 1 0 !important">
					<div class="bg-main absolute-center p-3">
						<p class="f-size-18px">OR</p>
					</div>
				</div>
				<div class="d-flex flex-column align-items-center justify-content-center col-md col-12 pt-5 px-0 p-lg-5 ps-md-5" style="gap:20px;z-index:10">
					<button class="login-google trans-200 py-2 px-3 d-flex align-items-center justify-content-center w-100" style="max-width:300px"><span class="icon-google pe-2"></span>Continuer avec Google</button>
					<button class="login-apple trans-200 py-2 px-3 d-flex align-items-center justify-content-center w-100" style="max-width:300px"><span class="icon-appleinc pe-2"></span>Continuer avec Apple</button>
					<button class="login-facebook trans-200 py-2 px-3 d-flex align-items-center justify-content-center w-100" style="max-width:300px"><span class="icon-facebook pe-2"></span>Continuer avec Facebook</button>
					<button class="login-twitter trans-200 py-2 px-3 d-flex align-items-center justify-content-center w-100" style="max-width:300px"><span class="icon-twitter pe-2"></span>Continuer avec Twitter</button>
					<div class="d-flex flex-column w-100 mt-3 align-items-center" style="max-width: 300px">
						<p class="f-size-14px mb-1">Vous n'avez pas encore de compte ?</p>
						<a href="" class="text-decoration-underline fw-medium">Incrivez-vous</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>