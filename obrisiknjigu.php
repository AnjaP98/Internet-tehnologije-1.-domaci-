<?php
require "broker.php";
require "knjige.php";



if (isset($_GET['delete'])){
    $id=$_GET['delete'];
    $del=mysqli_query($connection,"DELETE FROM knjige WHERE sifra=$id") ;
}
 header("location: sveknjige.php");

?>
