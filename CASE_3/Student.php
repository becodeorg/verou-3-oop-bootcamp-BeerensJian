<?php

class Student {
    public string $name;
    public int $grade;

    public function __construct(string $name, int $grade){
        $this -> name = $name;
        $this -> grade = $grade;
    }
}