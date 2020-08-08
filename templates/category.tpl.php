<main class="col-lg-9">
    <h1><?php echo $currentCategory->getName(); ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nihil rerum doloribus soluta dolorem fuga aut tempore harum molestias labore doloremque, vero quod reiciendis, porro alias repellat reprehenderit iure corrupti, omnis sed temporibus? Fugiat velit architecto molestias, nobis iure quis?</p>

    <?php foreach($categoryArticles as $id => $article): ?>
        <?php require __DIR__.'/article-item.tpl.php'; ?>
    <?php endforeach; ?>

</main>