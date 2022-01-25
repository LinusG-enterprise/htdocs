<?php

class person {
    var $name;
    var $age;
    var $mobil;
    var $epost;

    function _construct($persons_name){
        $this->name = $persons_name;
    }
  
    function get_name(){
        return $this->name;
    }
   

    function set_age($new_age){
        $this->age = $new_age;

    }
   
    function get_age(){
        return $this->age;
    }

    function set_mobil($new_mobil){
        $this->mobil = $new_mobil;

    }
   
    function get_mobil(){
        return $this->mobil;
    }

    function set_epost($new_epost){
        $this->epost = $new_epost;

    }
   
    function get_epost(){
        return $this->epost;
    }
}

class elev extends person{
    var $studentNummer;
    var $elevGruppe;
    var $kontaktLærer;


    function set_studentNummer($student_nummer){
        $this->studentNummer = $student_nummer;

        function get_studentNummer(){
            return $this-> studentNummer;
        }
    }

    function set_elevGruppe($elevs_gruppe){
        $this->elevGruppe = $elevs_gruppe;

        function get_elevGruppe(){
            return $this->elevGruppe;
        }
    }

    function set_kontaktLærer($kontakt_lærer){
        $this->kontaktLærer = $kontakt_lærer;

        function get_kontaktlærer(){
            return $this->kontaktLærer;
        }
    }

    
  



}


?>