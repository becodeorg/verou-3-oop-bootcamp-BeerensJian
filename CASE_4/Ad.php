<?php

class Ad extends Article{

    public function __construct(string $title, string $text)
    {
        parent::__construct($title, $text);
    }

    public function showTitle()
    {
        return strtoupper($this -> title) . "<br>";
    }

    public function showArticle()
    {
        return strtoupper($this -> title) . "<br>" . $this -> text . "<br> <br>";
    }
}