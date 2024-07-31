<?= $this->extend('layout') ?>

<?= $this->section('main') ?>
<section class="uk-section">
    <div class="uk-container" style="background-color:rgba(255,255,255,0.8); border-radius:20px;">
        <div class="uk-section-small">
			<div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small" uk-grid="masonry: true" uk-lightbox="animation: slide">
				<?php
				foreach ($files as $file) {
					$filePath = FCPATH. '/gallery/' . $file;
					if (is_file($filePath)) {
				?>
					<div>
						<a class="uk-inline" href="gallery/<?=$file?>">
							<img class="uk-width-1-1" src="gallery/<?=$file?>" />
						</a>
					</div>
				<?php
					}
				}
				?>
			</div>
        </div>
    </div>
    <div class="uk-margin uk-text-right uk-light uk-container">
        Developed by<br/><a class="uk-link-reset uk-text-bold" href="https://binary111.com" target="_blank">PT. Kodebiner Teknologi Indonesia</a>
    </div>
</section>
<?= $this->endSection() ?>