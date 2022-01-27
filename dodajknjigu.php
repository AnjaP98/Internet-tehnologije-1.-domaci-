<?php
require "broker.php";
require "knjige.php";

if(isset($_POST['submit'])){

    if(empty($_POST['id'])|| empty($_POST['naziv'])||empty($_POST['autor'])||empty($_POST['zanr'])||
    empty($_POST['jezik'])||empty($_POST['cena'])){
        echo "Popunite prazna polja.";
    
    }else{
    $id= $_POST['id'];
    $naziv= $_POST['naziv'];
    $autor= $_POST['autor'];
    $zanr= $_POST['zanr'];
   
    $jezik= $_POST['jezik'];
    $cena= $_POST['cena'];
    $slika= $_POST['slika'];
    
    $sql="INSERT INTO knjige(sifra,naziv,autor,zanr,jezik,cena,slike) values ('$id','$naziv','$autor','$zanr','$jezik','$cena','$slika')";
    $run= mysqli_query($connection,$sql);
    if($run== true){
        echo "Uspesno dodato";
    }else{
        echo "Greska!";
    }}}

    header("location: sveknjige.php");

?>