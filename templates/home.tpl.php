 <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
 <main class="col-lg-9">

     <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
      
     <?php foreach($articlesList as $id => $article): ?>
        <?php require __DIR__.'/article-item.tpl.php'; ?>
    <?php endforeach; ?>
     <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
     <nav aria-label="Page navigation example">
         <ul class="pagination justify-content-between">
             <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i> Précédent</a></li>
             <li class="page-item"><a class="page-link" href="#">Suivant <i class="fa fa-arrow-right"></i></a></li>
         </ul>
     </nav>

 </main>