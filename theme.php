<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Encoding, browser compatibility, viewport -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Search Engine Optimization (SEO) -->
		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $Wcms->getCurrentPageUrl() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<!-- Website and page title -->
		<title>
			<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>

		</title>

		<!-- Admin CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
			<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('skeleton/normalize.css') ?>">
			<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('skeleton/skeleton.css') ?>">
			<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">
			<link href="//fonts.googleapis.com/css?family=Lora:400,300,600" rel="stylesheet" type="text/css">
			
		
	</head>

	<!-- Admin settings panel and alerts -->
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>	
		
		  <!-- BUTTON TO TOP -->
<!--  <a href="#top"><i class="RETURN fa-solid fa-circle-arrow-up"></i></a>   -->

	<body>
		
		<nav class="bshadow">
			<div class="container">
				<div class="u-align-left"> 	
					<?= $Wcms->menu() ?>
				</div>
				
			</div>
		</nav>

			<div class="container hero">
				<div class="row">
					<div class="twelve columns">
						<img class="u-max-full-width logo" src="<?= $Wcms->asset('img/logo.png') ?>">
					</div>
				</div>
			</div>




			<div class="maincontent bshadow">
				<div class="container inner">
					<div class="row">
						<div class="twelve columns">
							<?= $Wcms->page('content') ?>
						</div>
					</div>
				</div>




				<div class="foot">
					<div class="container inner">
						<div class="row">
							<div class="twelve columns">
								<?= $Wcms->footer() ?>
							</div>
						</div>
					</div>
				</div>
			</div>


		

		<!-- Admin JavaScript. More JS libraries can be added below -->
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
		<?= $Wcms->js() ?>

	</body>
</html>
