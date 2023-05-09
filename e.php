<!DOCTYPE html>
<html>
<head>
	
	<title>Menu avec images et boutons</title>
	<link rel="stylesheet" href="css/carde.css">
  

	<style>

body {
  font-family: Arial, sans-serif;
  /*margin: 0;
  padding: 0;*/
  background-image: url('img/bag.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}

    
		/*<img src="img/mw.jpg" alt="img1">*/
    header {
			background-color: #7faddf;
			color: #FFFFFF;
			height: 60px;
			padding: 10px;
		}

		header h1 {
			margin: 0;
			padding: 0;
			text-align: center;
		}

		nav {
			background-color: #b5d1ee;
			height: 40px;
			line-height: 40px;
			padding: 10px;
			text-align: center;
		}

		nav a {
			color: #923434;
			display: inline-block;
			margin: 0 10px;
			text-decoration: none;
		}

		nav a:hover {
			color: #FFFF00;
			text-decoration: underline;
		}

		main {
			padding: 20px;
		}

		h2 {
			font-size: 24px;
			margin-top: 0;
			text-align: center;
		}

		section {
			display: inline-block;
			vertical-align: top;
			width: 30%;
			margin: 10px;
		}

		section img {
			display: block;
			margin: 0 auto;
		}

		
       
        .container {
  display: flex;
  /*justify-content: center;*/
}
.container {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  margin: 20px;
  background-size: cover;
  background-position: center;
}

.logo {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo img {
  height: 50px;
  margin-right: 20px;
}

nav ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  margin-right: 20px;
}

nav a {
  font-style: italic;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  position: relative;
}

nav a::after {
  content: '';
  display: block;
  width: 0;
  height: 2px;
  background-color: #9db0c0;
  position: absolute;
  bottom: -3px;
  left: 50%;
  transform: translateX(-50%);
  transition: width 0.3s ease-in-out;
}

nav a:hover::after {
  width: 100%;
}

nav a:hover {
  color: #ff0000;
}


/*========================== Footer Start ==========================*/

footer {
    color: #3a4750;
    background-color: #e9e4db;
    font-family: 'Rubik', sans-serif;
    font-size: 18px;
    font-weight: 300;
}

.footer-content {
    display: flex;
    justify-content: space-evenly;
    font-size: 15px;
    padding: 40px;
    padding-top: 0px;
}


/*========================== Footer Boxes ==========================*/

.content-larger {
    width: 306px;
}

.content-larger2 {
    width: 250px;
    margin-top: 5%;
}

.content-normal {
    margin-top: 5%;
    width: 200px;
}


/*========================== Footer Icons ==========================*/
.circle-contact {
    display: flex;
    width: fit-content;
    margin: auto;
    gap: 15px;
}

.circle-contact a {
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-size: 18px;
    text-decoration: none;
    background: #3a4750;
    transition: transform .2s;
}

.circle-contact a:hover {
    color: #3a4750;
    outline: solid;
    background: white;
    transform: scale(1.2);
}

.circle-contact a:hover i {
    font-size: 25px;
}
/*========================== Footer Button =========================*/
.slide:hover {
    box-shadow: inset 10em 0 0 0 var(--hover);
}

.slide {
    --color: #3a4750;
    --hover: #3a4750;
}

.footer-button {
    color: var(--color);
    transition: 0.25s;
}

.footer-button:hover {
    border-color: var(--hover);
    color: #fff;
}

.footer-button {
    background: none;
    border: 2px solid;
    font: inherit;
    line-height: 1;
    margin-top: 20px;
    padding: 15px 40px;
    cursor: pointer;
}

/***********************************/
.proverbe {
  display: flex;
  align-items: center;
  margin-top: 10px;
  white-space: nowrap;
}

.proverbe .im {
  margin-right: 10px;
}

.proverbe .im img {
  max-width: 500px; /* ou toute autre taille que vous souhaitez utiliser */
  height: auto;
  margin-left: 40px;
}

.proverbe .citation {
  flex-grow: 1;
}

.proverbe .citation p {
  font-size: 20px;
  font-style: italic;
  font-weight: bold;
  color: #333;
  margin: 0;
  padding: 0;
}






/***********************************/
/*========================== Footer Content ========================*/
.vl {
    border-left: 2px #6a6b6d dashed;
    margin-top: 4%;
    margin-bottom: 3%;
    padding: 5px;
}

.content-larger img {
    margin-top: 40px;
    width: 300px;
}

.footer-title {
    font-size: 20px;
    font-weight: 800;
    padding-bottom: 3px;
    margin-bottom: 10px;
}

.footer-title:after {
    content: "";
    border-bottom: 3px solid #3a4750;
    width: 30%;
    display: block;
    margin: auto 0;
}

.content-normal ul li {
    margin-top: 8px;
}

.content-normal ul li a {
    color: #636364 ;
    font-size: 17px;
    font-weight: 500;
}

.content-normal ul li a:hover {
    text-decoration: underline;
}

.notify {
    padding-bottom: 5px;
}
/*======================== Footer Copyright ========================*/
.copyright {
    text-align: center;
    padding: 20px;
    padding-left: 100px;
    padding-right: 100px;
    color: #caced3;
}

.copyright div {
    padding-top: 10px;
}
 
 


	</style>
</head>
<body>

	<header>
		
		  <!--<h1>MW</h1> -->
		  
		  <div class="logo">
			<img src="img/mw.jpg" alt="img1">
			<nav>
      <a onclick="window.location.href='index2.html'">Inscription</a>
			<a onclick="window.location.href='conecter.html'">Se connecter</a>
      <a onclick="window.location.href='admin.php'">E-administrative</a>
      
      <a onclick="window.location.href='propos.html'">A propos</a>
      
			  </nav>
		  </div>

		 
			
		
	</header>
	<nav>
  <a onclick="window.location.href='ped.html'">PEDAGOGIE</a>
  <a onclick="window.location.href='cat.html'">CATALOGUE DE FORMATIONS</a>

	</nav>
	<section class="proverbe">
		<div class="im">
			<img src="img/el.JPG" alt="img1">
		</div>
		<div class="citation">
		  <p> « Apprendre une autre langue est un peu comme devenir quelqu'un d'autre » </p>
		</div>
	  </section>
	  
	<main>
		<h2>E-LEARNING</h2>
		

		<?php
         include "cnx.php";
		 // Requête SQL pour récupérer les données de la table "cours"
         $sql = "SELECT * FROM cours";
         $resultat = mysqli_query($link, $sql);

// Vérification du résultat de la requête
     if (!$resultat) {
    die("Erreur lors de l'exécution de la requête : " . mysqli_error($link));
    }
     ?>
<div class="carte-container">
  <?php
  
// Affichage des données dans des cartes
while ($ligne = mysqli_fetch_assoc($resultat)) {
  
	echo '<div class="carte">';
	echo '<h2>' . $ligne["nom_cours"] . '</h2>';
	echo '<p>' . $ligne["descrip"] . '</p>';
	echo '<p>Tarif : ' . $ligne["tarif"] . ' €</p>';
  echo '<img src="img/'.$ligne["image"].'" alt="img" width="300px">'; 
  echo '<a href="#">Cliquez ici</a>';
	echo '</div>';
 
}    
		?>
 </div>   
    
    
  


		
		
		  
				
 <!------------------------ Footer b -------------------->
	
    
 
     <footer>
			<div class="footer-content">
				<div class="content-larger">
					<img src="logo_transparent2.png" alt="">
					<div class="circle-contact">
						
						
							
						<a href="">
							<i class="icon-facebook"></i></a>
						
						<a href="">
							<i class="icon-facebook"></i></a>
						<a href="">
							<i class="icon-instagram"></i></a>
						<a href="">
							<i class="icon-whatsapp"></i></a>
					</div>
				</div>
				<div class="vl"></div>
				<div class="content-normal">
					<div class="footer-title">Language Courses</div>
					<ul>
						<li><a href="">- French</a></li>
						<li><a href="">- Arabic</a></li>
						<li><a href="">- German</a></li>
						<li><a href="">- Chinese</a></li>
						<li><a href="">- Russian</a></li>
					</ul>
				</div>
				
				<div class="vl"></div>
				<div class="content-larger2">
					<div class="footer-title">Newsletter</div>
					<p class="notify">Get notified when new courses are announced</p>
					<label class="field field_v2">
						<input class="field__input" type="email" placeholder="e.g. exemple@mail.com">
						<span class="field__label-wrap">
						  <span class="field__label">Email</span>
						</span>
					</label>
	
					<button class="slide footer-button">Notify Me</button>
				</div>
			</div>
	
			<div class="copyright">
				<hr>
				<div>Copyright ©2023 All rights reserved</div>
			</div>
		</footer>
		  
		  <!------------------------ Footer End -------------------->
		  
		  
		
	</main>
</body>
</html>
