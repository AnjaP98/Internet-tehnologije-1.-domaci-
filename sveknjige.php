
<?php
    require "broker.php";
    require "knjige.php";

    session_start();

   

    $knjige = Knjiga::getAll($connection);

    if (!$knjige) {
        echo "Nastala je greška pri izvođenju upita<br>";
        die();
    }

    else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/kontaktcss.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Sve knjige</title>


    <style>

button{

padding:.5em .625em ;
color:#333;
margin-top:6px;border:1px;


}



   
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
   
    footer {
      
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; 
      margin: auto;
      min-height:200px;
  }
   
  button{

    padding:.5em .625em ;
    color:#333;
    margin-top:6px;border:1px;
    
    
  }


  input[type=text] {
    padding:.35em .625em ;
    color: #333;
  }
  /* input polja u formi za prijavu */
input[type=text], input[type=password] {
  width: 40%;
  padding: 5px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}



button:hover {
  opacity: 0.8;
}




#myInput {
 
  background-position: 200px 200px;
  background-repeat: no-repeat;
  color: white;
  
  background-color: #333;
  width:100%;
  height: 60%;
  font-size: 14px;
  padding: 10px ;
  border: 1px solid #333;
  margin-bottom: 5px;
  margin-top: 5px;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* modal pozadina */
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%;
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}

/* modal forma kada se otvori */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

/* x dugmic  */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* animacija */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
  </style>

</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
        
        <li><a href="sveknjige.php">Sve knjige </a></li>
        <li><a href="dodavanjeknjiga.php">Dodavanje knjiga </a></li>
       
        <li>
  
<!-- input za pretrazivanje knjiga -->

<input type="text" id="myInput" onkeyup="pretraga()" placeholder="Pretraga.." title="Ukucajte naslov ili ime autora">

</li>
     
    

    </ul>
    </div>
  </div>
</nav>




<?php
// prikazivanje svih knjiga iz baze na stranici 
$sql="SELECT sifra,naziv,autor,zanr,cena,slike,jezik FROM knjige"; 
$rez=$connection->query($sql);
?>
<div class="container text-center">    
  <h3>Sve knjige</h3>

        
<tr>


<br>
<br>

 <table id="myTable" align="center">

 <td style="width:100px;">  </td>
 <td style="width:100px;">  </td>
 <td style="width:100px;"> <b>Slika  </b></td>
 
 
 <td style="width:100px;"> <b>Naslov i autor</b> </td>
 <td style="width:100px;"> <b>Zanr</b></td>
 <td style="width:100px;"><b> Jezik</b></td>
 <td style="width:100px;"><b> Cena</b></td>
 <tr></tr>
<?php

//tabela za prikaz knjiga
												$i=0;
												while($row=mysqli_fetch_assoc($rez)){
												 ?>
                          <tr style="height: 150px;">
                          <td style="width:100px;"><button style="color: #333;"><a href="izmeniknjigu.php?3=<?php echo $row['sifra']; ?>">Izmeni</a></button></td>  
                          <td style="width:100px;"><button style="color: #333;"><a href="obrisiknjigu.php?delete=<?php echo $row['sifra']; ?>">Obriši</a></button></td>
                          
                          <td style="height: 200;"><?php echo '<img src="'.$row['slike'].'" width="100" height="100">' ?></td>
                          <td><b><?php echo $row["naziv"] ?><br></b>
                          <?php echo $row["autor"] ?></td>


                          <td style="width:100px;" ><?php echo$row["zanr"] ?></td>
                          <td style="width:100px;"><?php echo$row["jezik"] ?></td>


<td style="width:100px;" >
                          <?php echo$row["cena"] ?>
                          </td>
                        </td>
                      </tr>
													
												
                        <?php } ?>
</table> 

</div> 




<script>
  // funkcija za pretrazivanje knjiga
function pretraga() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display="none";
      }
    }       
  }
}
</script>
 <?php } ?>                   

 


</body>
</html>

   
