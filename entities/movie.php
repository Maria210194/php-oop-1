<?php 
    class Movie {
        public $title;
        public $genre;
        public $rating = 0;
    
        function __construct($_rating){
            $this->rating = $_rating;
        }   


        public function ratingMovie(){
            
            if($this->rating >= 8){

                return "Film da non perdere!";

            }elseif($this->rating >= 6){

                return "Film senza troppe pretese";

            }elseif($this->rating >= 4){

                return "Film poco apprezzati";

            }else{
                return "Non perdere tempo!";
            }
        }


        public function yearMovie(){
            
            if($this->year >= 2020){

                return "Film molto recente!";

            }elseif($this->year >= 1990){

                return "Film degli ultimi decenni";

            }elseif($this->year >= 1900){

                return "Film d'epoca!";

            }else{
                return "Anno del film non specificato!";
            }
        }
    }  
?>