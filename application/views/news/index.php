<a href="/news/create">Add new item</a>

<?php foreach ($news as $news_item): ?>

    <h3><?php echo $news_item['title']; ?></h3>
    <div class="main">
        <?php echo $news_item['text']; ?>
    </div>
    <p>
        <a href="<?php echo '/news/'.$news_item['slug']; ?>">View article</a>
        <a href="<?php echo '/news/delete/'.$news_item['id']; ?>">Delete article</a>
    </p>
    <hr/>

<?php endforeach; ?>