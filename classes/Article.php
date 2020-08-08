<?php
class   Article
{
    public  $title;
    public  $content;
    public  $author;
    public  $date;
    public  $category;

    public function __construct($title, $content, $author, $date, $category)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = $date;
        $this->category = $category;
    }
    public function getDate($lang = 'en')
    {
        if ($lang == 'fr')
        {
            return ($this->getDateFr());
        } 
        else if ($lang = 'en')
        {
            return ($this->getDateEn());
        }
    }

    public function getDateEn() {
        // Pour le format 'en', pas besoin de changer le format 
        return $this->date;
     }

    // Cette méthode prend un format yyyy-mm-dd et retourne un format dd/mm/yyyy
    public function getDateFr() {

        $dateFr = '';
        $date = new DateTime($this->date);
        $dateFr = $date->format('d/m/Y');

        return ($dateFr);
    }
}