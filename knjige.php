<?php
class Knjiga
{
    public $id;
    public $naziv;
    public $autor;
    public $zanr;
    public $jezik;
    public $cena;
    
    public function __construct($id = 0, $naziv = null, $autor = null, $zanr = null, $jezik=null, $cena= null)
    {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->autor = $autor;
        $this->zanr = $zanr;
        $this->jezik= $jezik;
        $this->cena = $cena;
    }

    public static function getAll(mysqli $connection)
    {
        
        $q = "SELECT * FROM knjige";
        return $connection->query($q);
    }

    
    
    

    public static function dodajKnjigu($id, $naziv,$zanr, $autor, $cena, $jezik, mysqli $connection)
    {
        $q = "INSERT INTO knjige(sifra,naziv,zanr,autor,jezik,cena) values('$id', '$naziv','$zanr', '$autor',  '$jezik','$cena')";
        return $connection->query($q);
    }

    
}
