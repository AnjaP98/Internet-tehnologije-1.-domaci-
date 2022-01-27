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

    /*public static function getByLanguage($jezik, mysqli $connection)
    {
        $q = "SELECT * FROM knjige WHERE jezik=$jezik";
        $myArray = array();
        if ($result = $connection->query($q)) {

            while ($row = $result->fetch_array(1)) {
                $myArray[] = $row;
            }
        }
        return $myArray;
    }
    public static function getByCategory($zanr, mysqli $connection)
    {
        $q = "SELECT * FROM knjige WHERE zanr=$zanr";
        $myArray = array();
        if ($result = $connection->query($q)) {

            while ($row = $result->fetch_array(1)) {
                $myArray[] = $row;
            }
        }
        return $myArray;
    }*/
    public function deleteById(mysqli $conn)
    {
        $query = "DELETE FROM knjige WHERE sifra=$this->id";
        return $conn->query($query);
    }

    

    public static function dodajKnjigu($id, $naziv,$zanr, $autor, $cena, $jezik, mysqli $connection)
    {
        $q = "INSERT INTO knjige(sifra,naziv,zanr,autor,jezik,cena) values('$id', '$naziv','$zanr', '$autor',  '$jezik','$cena')";
        return $connection->query($q);
    }

    
}