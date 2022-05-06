<?php
    class Movies
       {
        private $title; 
        public $genre;
        public $year;
        private $description;
        public $actors;
        public $vote;
        

        // funzione costruttore (nel metodo costruttore NON è obblocatorio inserire public)
        function __construct($title, $genre, $year, $description, $actors,  $vote = null ){
            $this->title = $title; 
            $this->genre = $genre;
            $this-> year = $year;
                if(strlen($description) <= 300){
                    $this-> description = $description;
                }
            $this -> actors = $actors;
                if ( is_numeric($vote) && $vote >= 0 && $vote <= 5 ) {
                    $this->vote = $vote;
                }
        }

        public function getTitle(){
            return $this -> title;
        } 

        public function getDescription(){
            return $this -> description;
        } 

    }
?>