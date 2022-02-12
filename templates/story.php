<!-- White Holder -->
<div class="white-holder">
    <!-- Container -->

    <?php
    $news_list = get_all_news();
    // debug($last_news);exit;
    ?>

    <?php foreach ($news_list as $news) : ?>
        <div class="container">
            <article class="clearfix latest-news">
                <header>
                    <h2><a href="novosti.php?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a></h2>
                    <time class="date" datetime="<?php echo $news['date']; ?>"><?php echo $news['date']; ?></time>
                </header>
            </article>
        </div>
    <?php endforeach; ?>
    <!-- Container END -->
</div>
<!-- White Holder END -->