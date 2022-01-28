<?php
if (!isset ($_GET["unos"])){
echo "Parametar Unos nije prosleđen!";
} else {
$pomocna=$_GET["unos"];
include "broker.php";
$sql="SELECT DISTINCT autor FROM knjige WHERE autor LIKE '$pomocna%'ORDER BY autor";
$rezultat = $connection->query($sql);
if ($rezultat->num_rows==0){
 echo "Ne postoji u bazi";
} else {
while($red = $rezultat->fetch_object()){
?>
<a href="#" onclick="place(this)"><?php  echo $red->autor;?></a>
<br/>
<?php
}
}
$connection->close();
}
?>
