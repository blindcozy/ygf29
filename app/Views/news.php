<?= $this->extend('layout') ?>

<?= $this->section('pageStyles') ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<section class="uk-section">
    <div class="uk-container" style="background-color:rgba(255,255,255,0.8); border-radius:20px;">
        <div class="uk-section-small">
            <?php foreach ($articles as $article) { ?>
                <article class="uk-article uk-card uk-card-default uk-card-hover uk-grid-collapse uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-width-1-3@m uk-flex uk-flex-center uk-flex-middle">
                        <a href="news/<?php echo $article['slug']; ?>"><img src="images/press/<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>"></a>
                    </div>
                    <div class="uk-width-2-3@m">
                        <div class="uk-card-header">
                            <a href="news/<?php echo $article['slug']; ?>"><h2 class="uk-card-title uk-margin-remove"><?php echo $article['title']; ?></h2></a>
                        </div>
                        <div class="uk-card-body uk-padding-remove-top">
                            <p><?php echo $article['intro']; ?></p>
                            <a href="news/<?php echo $article['slug']; ?>" title="<?php echo $article['title']; ?>">Selengkapnya...</a>
                        </div>
                    </div>
                </article>
            <?php } ?>
            <hr class="uk-divider-icon">
            <script>
            $( document ).ready(function () {
                $(".moreBox").slice(0, 3).show();
                if ($(".blogBox:hidden").length != 0) {
                    $("#loadMore").show();
                }   
                $("#loadMore").on('click', function (e) {
                    e.preventDefault();
                    $(".moreBox:hidden").slice(0, 12).slideDown();
                    if ($(".moreBox:hidden").length == 0) {
                        $("#loadMore").fadeOut('slow');
                    }
                });
            });
            </script>
            <?php 
            $i=0;
            foreach ($newses as $news) {
                $title = $news->title;
                $link = $news->link;
                $description = $news->description;
                $postDate = $news->pubDate;
                $postImage = $news->children('media', True)->content->attributes();
                if($i>=12) break;
            ?>
            <article class="uk-article uk-card uk-card-default uk-card-hover uk-margin moreBox" <?php if ($i>=4) {echo 'style="display: none;"';} ?>>
                <div class="uk-card-body">
                    <a href="<?php echo $link; ?>" target="_blank"><h2 class="uk-card-title uk-margin-remove"><?php echo $title; ?></h2></a>
                    <p class="uk-article-meta uk-margin-remove">Diterbitkan pada <?php echo $postDate; ?></p>
                </div>
            </article>
            <?php
                $i++;
            }
            ?>
            <div class="uk-flex uk-flex-center uk-margin-top">
                <button id="loadMore" class="uk-button uk-button-primary uk-button-large">Load More</button>
            </div>
        </div>
    </div>
    <div class="uk-margin uk-text-right uk-light uk-container">
        Developed by<br/><a class="uk-link-reset uk-text-bold" href="https://binary111.com" target="_blank">PT. Kodebiner Teknologi Indonesia</a>
    </div>
</section>
<?= $this->endSection() ?>