<?php
if (!isset ($_GET["naziv"])){
echo "Parametar Naziv nije prosleđen!";
} else {
$naziv=$_GET["naziv"];
include "broker.php";

$sql="SELECT * FROM knjige WHERE naziv='".$naziv."'";
$rezultat = $connection->query($sql);
if ($rezultat->num_rows!=0){
echo "0";
} else {
echo "1";
}
$connection->close();
}
?>

