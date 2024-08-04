<!DOCTYPE html>
<html dir="ltr" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $desc; ?>">
		<base href="<?php echo base_url() ?>">
		<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link rel='stylesheet' href='/css/theme.css' type='text/css' media='all' />
		<script type='text/javascript' src='/js/uikit.min.js'></script>
		<script type='text/javascript' src='/js/uikit-icons.min.js' defer></script>
		<script type='text/javascript' src='/js/theme.js' defer></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-QFPERZQMRJ"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-QFPERZQMRJ');
		</script>
        <?= $this->renderSection('pageStyles') ?>
    </head>
    <body>
		<div class="partners-container" uk-height-viewport>
			<?= view('Views/menu') ?>
			<section class="uk-section uk-padding-remove-bottom">
				<div class="uk-container uk-container-xlarge" style="background-color:rgba(4,1,51,0.6); border: 4px solid #fff; border-radius:20px;">
					<div class="uk-section-small">
						<!-- <div class="uk-margin uk-child-width-auto uk-flex-center uk-flex-bottom" uk-grid>
							<div><img src="images/logos/dinas-kebudayaan.png" /></div>
							<div><img src="images/logos/danais.png" /></div>
							<div><a href="https://www.djarumfoundation.org/aktivitas/kegiatan/budaya/" target="_blank"><img src="images/logos/djarum-foundation.png" /></a></div>
							<div><img src="images/logos/ambarrukmo.png" /></div>
						</div>
						<div class="uk-margin-large uk-child-width-auto uk-flex-center uk-flex-middle" uk-grid>
							<div><img src="images/logos/jogfest.png" /></div>
							<div><img src="images/logos/ppi.png" /></div>
							<div><img src="images/logos/saab.png" /></div>
							<div><img src="images/logos/dc-pro.png" /></div>
							<div><img src="images/logos/koran-merapi.png" /></div>
							<div><img src="images/logos/eventweb.png" /></div>
							<div><img src="images/logos/korambernas.png" /></div>
							<div><img src="images/logos/krjogja.png" /></div>
							<div><img src="images/logos/ekbizz.png" /></div>
							<div><img src="images/logos/liputan6.png" /></div>
							<div><img src="images/logos/lensajogja.png" /></div>
							<div><img src="images/logos/geronimo.png" /></div>
							<div><img src="images/logos/jogjafamily.png" /></div>
							<div><img src="images/logos/sonora.png" /></div>
							<div><img src="images/logos/swaragama.png" /></div>
							<div><img src="images/logos/acaraseni.png" /></div>
							<div><img src="images/logos/jaringacara.png" /></div>
							<div><img src="images/logos/prodvokator.png" /></div>
							<div><img src="images/logos/paijo.png" /></div>
							<div><img src="images/logos/pyy.png" /></div>
							<div><img src="images/logos/nyatanya.png" /></div>
							<div><img src="images/logos/uma.png" /></div>
						</div> -->
						<img class="uk-width-1-1" src="images/partners.jpg" />
					</div>
				</div>
			</section>
			<footer class="uk-section uk-section-small">
				<div class="uk-container">
					<?php
					if ($ismobile) {
						$socmed = 'uk-flex-center';
					$copyright = 'uk-text-center';
					} else {
						$socmed = 'uk-flex-left';
						$copyright = 'uk-text-left';
					}
					?>
					<div class="uk-margin uk-light uk-child-width-auto uk-flex-center" uk-grid>
						<div>
							<a class="uk-link-text" href="https://www.facebook.com/YogyakartaGamelanFestival" target="_blank"><i class="fa-brands fa-facebook"></i> YogyakartaGamelanFestival</a>
						</div>
						<div>
							<a class="uk-link-text" href="https://www.instagram.com/komunitasgayam16/" target="_blank"><i class="fa-brands fa-instagram"></i> komunitasgayam16</a>
						</div>
						<div>
							<a class="uk-link-text" href="https://x.com/Gayam16" target="_blank"><i class="fa-brands fa-x-twitter"></i> @Gayam16</a>
						</div>
						<div>
							<a class="uk-link-text" href="https://www.youtube.com/@Gayam16" target="_blank"><i class="fa-brands fa-youtube"></i> Gayam16</a>
						</div>
					</div>
					<div class="uk-margin uk-light uk-text-center">
						Developed by <a class="uk-text-bold" href="https://binary111.com" target="_blank">Kodebiner Teknologi Indonesia</a>
					</div>
				</div>
			</footer>
		</div>
    </body>
</html>