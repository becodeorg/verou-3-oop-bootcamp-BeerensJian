<?php

class Article {

    public string $title;
    public string $text;

    public function __construct(string $title, string $text)
    {
    $this -> title = $title;
    $this -> text = $text;
    }

    public function showTitle()
    {
        return $this -> title . "<br>" ;
    }

    public function showArticle()
    {
        return $this -> title . "<br>" . $this -> text . "<br> <br>";
    }

}