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
    </head>
    <body>
		<div class="about-container" uk-height-viewport>
			<?= view('Views/menu') ?>
			<section class="uk-section">
				<div class="uk-container uk-light" style="background-color:rgba(4,1,51,0.6); border: 4px solid #fff; border-radius:20px;">
					<div class="uk-section-small">
						<h1 class="uk-text-center">28th Yogyakarta Gamelan Festival</h1>
						<p>Yogyakarta Gamelan Festival (YGF) merupakan sebuah perayaan atas gamelan, yang menjadi tempat berkumpul para pemain dan pecinta gamelan seluruh dunia, dan sudah diselenggarakan sejak tahun 1994 oleh Sapto Raharjo (alm). Peristiwa ini penting untuk dilakukan sebagai salah satu langkah strategis dalam memajukan kebudayaan Indonesia untuk memberikan kontribusi kepada peradaban dunia.</p>
						<p>Tahun ini, YGF ingin mengapresiasi usaha-usaha yang telah dilakukan dalam melestarikan dan mengembangkan gamelan sebagai budaya bangsa oleh para pendahulu. Usaha ini telah menciptakan ruang kemungkinan yang semakin membesar. Banyak pelaku seni lintas disiplin melibatkan gamelan dalam proses kreatif mereka. Ini adalah bukti gamelan telah dan sedang berkembang. Sementara, keadiluhungan gamelan tetap dijaga oleh para punggawanya.</p>
						<p>Gamelan telah melampaui dengungnya, gamelan : beyond sound…</p>
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
							<a class="uk-link-text" href="https://www.facebook.com/YogyakartaGamelanFestival" target="_blank"><span uk-icon="facebook"></span> YogyakartaGamelanFestival</a>
						</div>
						<div>
							<a class="uk-link-text" href="https://www.instagram.com/komunitasgayam16/" target="_blank"><span uk-icon="instagram"></span> komunitasgayam16</a>
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