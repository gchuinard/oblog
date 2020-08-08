<article class="card">
    <div class="card-body">
        <h2 class="card-title"><a href="index.php?page=article&id=<?php echo $id; ?>"><?php echo $article->title; ?></a></h2>
        <p class="card-text"><?php echo $article->content; ?></p>
        <p class="infos">
        Posté par <a href="#" class="card-link"><?php echo $authorsList[$article->author]->getName(); ?></a> le <time datetime="<?php echo $article->getDateEn(); ?>"><?php echo $article->getDateFr(); ?></time> dans <a href="#"
            class="card-link"><?php 
                // Je récupère l'objet catégorie correspondant à l'article
                $categoryObject = $categoriesList[$article->category];
                echo $categoryObject->getHashtag();
            ?></a>
        </p>
    </div>
</article>