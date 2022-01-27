<?php 
     include "broker.php";
   
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izmena knjige</title>
    <link href="style.css" rel="Stylesheet">
    
</head>
<body>

    <div >
        <h2>Izmena knjige</h2>    
    </div>
    
    <?php
include ('broker.php');
if(isset($_GET['edit'])){

    $id=$_GET['edit'];
   
    $result=$connection->query("SELECT naziv,autor,zanr,jezik,cena FROM knjige WHERE sifra=$id") ;
  
      $row=$result->fetch_array();
      
      $naziv=$row['naziv'];
      $autor=$row['autor'];
      $zanr=$row['zanr'];
      $jezik=$row["jezik"];
      $cena=$row["cena"];
      

      
   
  }  ?><div>
    <form  method="POST" id="update" class="formaIzmena">
    <input type="hidden" id="hidden" value="<?php echo $id;?>">
        <div class="polje">
            <label for="nazivupdate">Naziv knjige</label>
            <input type="text" name="nazivu" id="imeU" value="<?php echo $naziv;?>">
        </div><br>
        <div class="polje">
            <label for="autorupdate">Autor</label>
            <input type="text" name="autoru" id="autoru" value="<?php echo $autor;?>">
        </div><br>
        <div class="polje">
            <label for="zanrupdate">Zanr</label>
            <input type="text" name="zanru" id="zanru" value="<?php echo $zanr;?>">
        </div><br>
        <div class="polje">
            <label for="jezikupdate">Jezik</label>
            <input type="text" name="jeziku" id="jeziku" value="<?php echo $jezik;?>">
        </div><br>
        <div class="polje">
            <label for="cenaupdate">Cena</label>
            <input type="number" name="cenau" id="cenau" value="<?php echo $cena;?>">
        </div><br>
       
  
<input type="hidden" value="<?php echo $id;?>" id="id">
        <div class="polje">
        <input type="submit" class="dugme2" name="submit" value="Izmeni" id="update">
          
            
        </div>
    </form>
    
<?php 

  include ('broker.php');

  // podaci iz polja za  izmenu
  $nazivu=filter_input(INPUT_POST,'nazivu'); 
  $autoru=filter_input(INPUT_POST,'autoru'); 
  $zanru=filter_input(INPUT_POST,'zanru'); 
  $jeziku=filter_input(INPUT_POST,'jeziku'); 
  $cenau=filter_input(INPUT_POST,'cenau'); 
 
  
  
  $sql=mysqli_query($connection, "UPDATE knjige SET naziv='$nazivu', autor='$autoru', zanr='$zanru',
  jezik='$jeziku', cena='$cenau' WHERE sifra='$id'");
  


 

  ?>

  <a href="sveknjige.php"><button >Nazad</button></a>
</body>
</html>