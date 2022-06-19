<!DOCTYPE html>
<html lang="fr">
  <head>
   <meta charset="utf-8"> 
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="author" content="MO" />
   <meta name="description" content="SAE14" />
   <meta name="keywords" content="HTML, CSS" />
   <title>Gestion</title>
   <link rel="stylesheet" type="text/css" href="./Styles/styleRWD.css" />
 </head>

 <body>
  <header>
    <h1> Gestion </h1>
  </header>
  <nav>
    <ul>
		<li><a href="./Index.html" > Acceuil </a></li>
		<li><a href="./Administration.html" > administration </a></li>
		<li><a href="./Consultation.html" > Consultation </a></li>
		<li><a href="#" class="first"> Gestion </a></li>
	</ul>
  </nav>
  <section id="first">
  Pour aller vers le capteur souhaité du batiment E salle E204
  <br><br>
  <form>
    <a href="./E204_CO2.html">
        <input type="button" value="Capteur Co2">
    </a>
</form>
 <br>
    <form>
    <a href="./E204_temp.html">
        <input type="button" value="Capteur temperature">
    </a>
</form>
<br><br><br>
   Pour aller vers le capteur souhaité du batiment E salle E208
    <br><br>
  <form>
    <a href="./E208_CO2.html">
        <input type="button" value="Capteur Co2">
    </a>
</form>
 <br>
    <form>
    <a href="./E208_temp.html">
        <input type="button" value="Capteur temperature">
    </a>
</form>
  </section>

  <footer>
    <ul>
	  <li>IUT de Blagnac</li>
	  <li>Département Réseaux et Télécommunications</li>
      <li>BUT1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
	</ul>  
  </footer>
 </body>
</html>
<?php
	session_start();
	if($_SESSION['login'] != ""){
		$user = $_SESSION['username'];	
		echo "Bonjour $user, je t'ai créer.";
	}
?>
