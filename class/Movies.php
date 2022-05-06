<?php
    class Movies
       {
        private $title; 
        private $genre;

        // funzione costruttore (nel metodo costruttore NON è obblocatorio inserire public)
        function __construct($title, $genre){
            $this->title = $title; 
            $this->genre = $genre;
        }
    } 

?>