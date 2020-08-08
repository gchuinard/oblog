<?php
class App 
{
    private $data;
    private $templateName;

    // déclarer un constructeur
    public function __construct() {
        // qui s'occupera d'initialiser les propriétés
        $this->data = new Data();
        $this->templateName = 'home';
    }
    /**
     * Méthode permettant de charger la page demandée
     */
    public function run() {
        // Récupération des données nécessaires la page (si besoin)
        if (isset($_GET['page'])) {
            $page = trim($_GET['page']);
        }
        else {
            $page = 'home';
        }

        // On a besoin des catégories et des auteurs, quelque soit la page
        // $categoriesList = $this->data->getCategories();
        // $authorsList = $this->data->getAuthors();
        // mais à cause de la portée des variables, on doit placer
        // ces 2 récupérations de données dans chaque méthode

        // Page author
        if ($page == 'author') {
            $this->pageAuthor();
        }
        // Page category
        else if ($page == 'category') {
            $this->pageCategory();
        }
        // Page article
        else if ($page == 'article') {
            $this->pageArticle();
        }
        // Page d'accueil
        else if ($page == 'home') {
            $this->pageHome();
        }
    }
    /**
     * Méthode pour la page d'accueil
     */
    public function pageHome() {
        // On a besoin des catégories et des auteurs, quelque soit la page
        $categoriesList = $this->data->getCategories();
        $authorsList = $this->data->getAuthors();
        // récupérer le tableau des articles
        $articlesList = $this->data->getArticles();
            
        $this->templateName = 'home';
        
        // A cause de la portée des variables, on doit inclure les templates
        // dans chaque méthode affichant une page
        // On fera différement en saison 5 :)
        require __DIR__.'/../templates/header.tpl.php';
        require __DIR__.'/../templates/'.$this->templateName.'.tpl.php';
        require __DIR__.'/../templates/sidebar.tpl.php';
        require __DIR__.'/../templates/footer.tpl.php';
    }
    /**
     * Méthode pour la page d'un article
     */
    public function pageArticle() {
        // On a besoin des catégories et des auteurs, quelque soit la page
        $categoriesList = $this->data->getCategories();
        $authorsList = $this->data->getAuthors();

        // Récupération de l'id de l'article fourni en paramètre d'url
        if (isset($_GET['id'])) {
            // Je récupère le paramètre id et je transtype en entier
            // pour m'assurer que j'ai bien une valeur numérique
            $articleId = (int) $_GET['id'];
            //var_dump($articleId);
        } else {
            $articleId = 0;
        }

        // récupérer l'objet article pour l'id fourni
        $currentArticle = $this->data->getArticle($articleId);
        $this->templateName = 'article';
        // A cause de la portée des variables, on doit inclure les templates
        // dans chaque méthode affichant une page
        // On fera différement en saison 5 :)
        require __DIR__.'/../templates/header.tpl.php';
        require __DIR__.'/../templates/'.$this->templateName.'.tpl.php';
        require __DIR__.'/../templates/sidebar.tpl.php';
        require __DIR__.'/../templates/footer.tpl.php';
    }
    /**
     * Méthode pour la page d'une catégorie
     */
    public function pageCategory() {
        // On a besoin des catégories et des auteurs, quelque soit la page
        $categoriesList = $this->data->getCategories();
        $authorsList = $this->data->getAuthors();

        if (isset($_GET['id'])) {
            $categoryId = (int) $_GET['id'];
        } else {
            $categoryId = 0;
        }
        // récupérer l'objet category pour l'id fourni
        $currentCategory = $this->data->getCategory($categoryId);
        // récupérer les objets Articles pour l'id de la catégorie
        $categoryArticles = $this->data->getCategoryArticlesList($categoryId);
        $this->templateName = 'category';
        
        // A cause de la portée des variables, on doit inclure les templates
        // dans chaque méthode affichant une page
        // On fera différement en saison 5 :)
        require __DIR__.'/../templates/header.tpl.php';
        require __DIR__.'/../templates/'.$this->templateName.'.tpl.php';
        require __DIR__.'/../templates/sidebar.tpl.php';
        require __DIR__.'/../templates/footer.tpl.php';
    }
    /**
     * Méthode pour la page d'un auteur
     */
    public function pageAuthor() {
        // On a besoin des catégories et des auteurs, quelque soit la page
        $categoriesList = $this->data->getCategories();
        $authorsList = $this->data->getAuthors();
        
        if (isset($_GET['id'])) {
            $authorId = (int) $_GET['id'];
        } else {
            $authorId = 0;
        }
        // récupérer l'objet article pour l'id fourni
        $currentAuthor = $this->data->getAuthor($authorId);
        // récupérer les objets Articles pour l'id de la catégorie
        $authorArticles = $this->data->getAuthorArticlesList($authorId);
        $this->templateName = 'author';
        
        // A cause de la portée des variables, on doit inclure les templates
        // dans chaque méthode affichant une page
        // On fera différement en saison 5 :)
        require __DIR__.'/../templates/header.tpl.php';
        require __DIR__.'/../templates/'.$this->templateName.'.tpl.php';
        require __DIR__.'/../templates/sidebar.tpl.php';
        require __DIR__.'/../templates/footer.tpl.php';
    }
} 