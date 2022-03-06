<?php

class Vacancie extends Article {


    public function __construct(string $title, string $text)
    {
        parent::__construct($title, $text);
    }

    public function showTitle()
    {
        return $this -> title . " -Apply now! <br>";
    }

    public function showArticle()
    {
        return $this -> title  . " -Apply now! <br>" . $this -> text . "<br> <br>";
    }

}