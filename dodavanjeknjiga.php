<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodavanje knjiga</title>

    <style>
   
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
 background-image: url('/css/searchicon.png');
 background-position: 20px 20px;
 background-repeat: no-repeat;
 width:20%;
 font-size: 16px;
 padding: 12px 20px 12px 40px;
 border: 1px solid #ddd;
 margin-bottom: 12px;
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
       
        
     
    

    </ul>
    </div>
  </div>
</nav>

<div >
        <h2>Dodavanje knjige</h2>    
    </div>
    <form action="dodajknjigu.php" method="POST" class="formaUnos">
        <div class="polje">
            <label>ID</label>
            <input type="text" name="id" id="id" placeholder="Unesite ID...">
        </div><br>
        <div class="polje">
            <label>Naziv</label>
            <input type="text" name="naziv" id="naziv" placeholder="Unesite naslov knjige...">
        </div><br>
        <div class="polje">
            <label>Autor</label>
            <input type="text" name="autor" id="autor" placeholder="Unesite ime autora...">
        </div><br>
        <div class="polje">
            <label>Žanr</label>
            <input type="text" name="zanr" id="zanr" placeholder="Unesite zanr knjige...">
        </div><br>
        <div class="polje">
            <label>Jezik</label>
            <input type="text" name="jezik" id="jezik" placeholder="Unesite jezik...">
        </div><br>
        <div class="polje">
            <label>Cena</label>
            <input type="number" name="cena" id="cena" placeholder="Unesite cenu...">
        </div><br>
        <div class="polje">
            <label>Slika</label>
            <input type="text" name="slika" id="slika" placeholder="Unesite putanju slike...">
        </div><br>


        <div class="polje">
            <button type="submit" name="submit" class="btn">Dodaj</button>
         
            
      


        </form>
</body>
</html>



