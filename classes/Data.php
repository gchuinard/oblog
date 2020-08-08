<?php

class   Data
{
    private $articles;
    private $authors;
    private $categories;

    public function __construct()
    {
        require __DIR__ . "/../data.php";

        $this->articles = $dataArticlesList;
        $this->authors = $dataAuthorsList;
        $this->categories = $dataCategoriesList;
    }

    public function getArticles()
    {
        return $this->articles;
    }
    
    public function getAuthors()
    {
        return $this->authors;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    // Méthode pour avoir un seul article selon son ID
    public function getArticle($id)
    {
        if (isset($this->articles[$id]))
        {
            return ($this->articles[$id]);
        }
        else
        {
            return ($this->articles[1]);
        }
    }

    public function getCategory($id)
    {
        if (isset($this->categories[$id]))
        {
            return ($this->categories[$id]);
        }
        else
        {
            return ($this->categories[1]);
        }
    }

    public function getAuthor($id)
    {
        if (isset($this->authors[$id]))
        {
            return ($this->authors[$id]);
        }
        else
        {
            return ($this->authors[1]);
        }
    }

    public function getCategoryArticlesList($categoryId)
    {
        $articlesList = [];

        foreach ($this->articles as $articleId => $articleObject)
        {
            if ($categoryId == $articleObject->category)
            {
                $articlesList[$articleId] = $articleObject;
            }
        }
        return ($articlesList);
    }

    public function getAuthorArticlesList($authorId)
    {
        $articlesList = [];

        foreach ($this->articles as $articleId => $articleObject)
        {
            if ($authorId == $articleObject->author)
            {
                $articlesList[$articleId] = $articleObject;
            }
        }
        return ($articlesList);
    }

}