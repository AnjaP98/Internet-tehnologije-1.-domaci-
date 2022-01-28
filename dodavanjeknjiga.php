<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="js/sugerisi.js" type="text/javascript"></script> 
<script type="text/javascript">
function place(ele){
    document.getElementById('txt').value = ele.innerHTML;
	document.getElementById("livesearch").style.display = "none";
}
</script>
	
	<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$("#ime").blur(function(){
var vrednost = $("#ime").val();
$.get("provera.php", { naziv: vrednost },
   function(data){
   if (data == 0){
   $("#user").html("Knjiga sa ovim naslovom već postoji u bazi");
   $("#ime").focus();
   }
   if (data == 1){
   $("#user").html("Knjiga sa ovim naslovom ne postoji u bazi");
   }   
   });
});
});
</script>

    <title>Dodavanje knjiga</title>

    <style>

      .col-sm-5{
        width: 600px;
      }
    
      .form-control{
        width: 230px;
        padding: auto;
      }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    footer {
      
      padding: 25px;
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

/* pretraga.. */
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
        display: flex;
        width: 1500px;
  
       

 
  justify-content: center;
  align-items: center;
  
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
  }}
  @media (min-width: 768px){
.container {
    width: 750px;
}}


  </style>
</head>
<body onload="document.getElementById('txt').focus()">
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
       
    </div>
  </div>
</nav>






 
<div class="container-fluid bg-grey">
  <h2 class="text-center">Dodavanje knjige</h2>
  <form action="dodajknjigu.php" method="POST" class="formaUnos">
  <br>
  <br>
  <div class="row">
    <div class="container">
    
    <div class="col-sm-5"  >
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" type="text" name="id" id="id" placeholder="Unesite ID..." required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" type="text" name="naziv" id="naziv" placeholder="Unesite naslov knjige..." required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" type="text" id="txt" name="text" size="32" onkeyup="sugestija(this.value)" placeholder="Unesite ime autora..." required >
          <div id="livesearch"></div> </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" type="text" name="zanr" id="zanr" placeholder="Unesite zanr knjige..." required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" type="text" name="jezik" id="jezik" placeholder="Unesite jezik knjige..." required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" type="number" name="cena" id="cena" placeholder="Unesite cenu..." required >
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" type="text" name="slika" id="slika" placeholder="Unesite putanju slike..." required>
        </div>
        <div class="row">
        <div class="col-sm-12 form-group">
		
        <button type="submit" name="submit" class="btn">Dodaj</button>
        </div>
      </div>
      </div>
      
    </div>
  </div>
  
</div></form> 
</div>
    

</body>
</html>






