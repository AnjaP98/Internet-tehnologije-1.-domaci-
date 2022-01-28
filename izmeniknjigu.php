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
<a href="sveknjige.php"><button >Nazad</button></a>
    <div >
        <h2>Izmena knjige</h2>    
    </div>
    
    <?php
include ('broker.php');
if(isset($_GET['edit'])){

    $id=$_GET['edit'];
   
    $result=$connection->query("SELECT naziv,autor,zanr,jezik,cena FROM knjige WHERE sifra=$id") ;
  
      $row=$result->fetch_array();
      
      $naziv=$row["naziv"];
      $autor=$row["autor"];
      $zanr=$row["zanr"];
      $jezik=$row["jezik"];
      $cena=$row["cena"];
      

      
   
  }  ?><div>
     <div class="container-fluid bg-grey">
  <h2 class="text-center">Izmena knjige</h2>
  
  <input type="hidden" id="hidden" value="<?php echo $id;?>">
  <br>
  <br>
  <div class="row">
    <div class="container">
    <form  method="POST" id="update" class="formaIzmena">
    <div class="col-sm-5"  >
      <div class="row">
        
        <div class="col-sm-6 form-group">
          <input class="form-control" type="text" name="nazivu" id="imeU" value="<?php echo $naziv;?>"></div>
         
        <div class="col-sm-6 form-group">
          <input class="form-control" type="text" name="autoru" id="autoru" value="<?php echo $autor;?>" >
          </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" type="text" name="zanru" id="zanru" value="<?php echo $zanr;?>">
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" type="text"name="jeziku" id="jeziku" value="<?php echo $jezik;?>">
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" type="number" name="cenau" id="cenau" value="<?php echo $cena;?>" >
        </div>
       
        <div class="row">
        <div class="col-sm-12 form-group">
        <input type="hidden" value="<?php echo $id;?>" id="id">
        <input type="submit" class="dugme2" name="submit" value="Izmeni" id="update">
        </div>
      </div>
      </div>
      
    </div>
    </form> 
  </div>
  
</div>
</div>
    
  
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
