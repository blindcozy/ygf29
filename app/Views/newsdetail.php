<?= $this->extend('layout') ?>

<?= $this->section('main') ?>
<section class="uk-section">
    <div class="uk-container" style="background-color:rgba(255,255,255,0.8); border-radius:20px;">
        <div class="uk-section-small">
            <article>
                <h1><?= $article['title'] ?></h1>
                <div class="uk-margin uk-text-center">
                    <img class="uk-width-1-2@m" src="images/press/<?= $article['image'] ?>" alt="<?= $article['title'] ?>" />
                </div>
                <?= $article['content'] ?>
            </article>
        </div>
    </div>
    <div class="uk-margin uk-text-right uk-light uk-container">
        Developed by<br/><a class="uk-link-reset uk-text-bold" href="https://binary111.com" target="_blank">PT. Kodebiner Teknologi Indonesia</a>
    </div>
</section>
<?= $this->endSection() ?>