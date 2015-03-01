<!DOCTYPE html > 
<html> 
	<head>
	<link rel="stylesheet" href="style.css"/> 
	<title>Up-Grades : Notes</title> 
	<meta charset="utf-8" /> 
	</head> 
	
	
	
	<script type='text/javascript'>
	function afficheCache(idpr)
	{
		var pr1 = document.getElementById('pr1');
		var pr2 = document.getElementById('pr2');
		var pr3 = document.getElementById('pr3');
		var pr4 = document.getElementById('pr4');
		var pr = document.getElementById(idpr);
		
		
		if (pr.style.display == "none")
		{
			pr1.style.display = "none";
			pr2.style.display = "none";
			pr3.style.display = "none";
			pr4.style.display = "none";
			pr.style.display = "";
		}
		else
		{
			pr1.style.display = "none";
			pr2.style.display = "none";
			pr3.style.display = "none";
			pr4.style.display = "none";
		}
	}
	</script>
	

	
	<?php include('header.php'); ?>


	<nav>
		<ul>
        <li>Maths</li>
 		<li>Français</li>
		<li>Histoire</li>
		<li>Chimie</li>
		<li>Ajouter cours</li>
        </ul>
	</nav>
	
	<body>
		
		<h1>
			Programmation orientée objet
		</h1>




<input type="button" onclick="afficheCache('pr1');" value="Définition" name="btn1"/>
<input type="button" onclick="afficheCache('pr2');" value="Vrai/Faux" name="btn2"/>
<input type="button" onclick="afficheCache('pr3');" value="Truc 3" name="btn3"/>
<input type="button" onclick="afficheCache('pr4');" value="Truc4" name="btn4"/><br>
<br>
<div id="pr1" style="display:none" style='border:1px double black'>
<form action='note.php' method="post">
<fieldset>
<legend>Ajouter une définition</legend>
<center>
<p><strong>Mot : </strong><input type='text' name='mot' autocomplete="off" autofocus required/> </p></br>
<p><strong>Définition : <p></strong><textarea name='txt' autocomplete="off" style="width:250px;height:150px;" required></textarea> </p></p>
<p><input type='submit' name='ajouter' value='Ajouter' class='valider'/></p>
</center>
</fieldset>
</form> 
</div>   

<div id="pr2" style="display:none" style='border:1px double black'>
<form action='note.php' method="post">
<fieldset>
<legend>Ajouter  </legend>
<center>
<p><strong>Mot : </strong><input type='text' name='mot' autocomplete="off" autofocus required/> </p>
<p><strong>Définition : </strong><input type='text' name='txt' autocomplete="off" required/> </p>
<input type='submit' name='ajouter' value='Ajouter' class='valider'/>
</center> 
</fieldset> 
</form>
</div> 

<div id="pr3" style="display:none" style='border:1px double black'>
<form action='note.php' method="post">
<fieldset>
<legend>Ajouter une définition</legend>
<center>
<p><strong>Mot : </strong><input type='text' name='mot' autocomplete="off" autofocus required/> </p>
<p><strong>Définition : </strong><input type='text' name='txt' autocomplete="off" required/> </p>
<input type='submit' name='ajouter' value='Ajouter' class='valider'/>
</center> 
</fieldset> 
</form>
</div>
 
<div id="pr4" style="display:none" style='border:1px double black'>
<form action='note.php' method="post">
<fieldset>
<legend>Ajouter du texte libre</legend>
<center>
<p><strong>Titre : </strong><input type='text' name='mot' autocomplete="off" autofocus required/> </p>
<p><strong>Texte : </strong><input type='text' name='txt' autocomplete="off" required/> </p>
<input type='submit' name='ajouter' value='Ajouter' class='valider'/>
</center> 
</fieldset> 
</form>
</div> 


			</br>
	<section> 
		<p><strong>La programmation orientée objet:</strong></br>
		Définition et interaction de briques logicielles appelées objets. </p></br>
	
		<p><strong>Objet </strong> </br>
		Un objet représente un concept, une idée ou toute entité du monde physique, comme une voiture, une personne ou encore une page d'un 	livre. Il possède une structure interne et un comportement, et il sait interagir avec ses pairs.</p></br>
	
		<p><strong>La redéfinition </strong> </br>
		La programmation objet permet à un objet de raffiner la mise en œuvre d'un message défini pour des objets d'un type parent, autrement 		dit de redéfinir la méthode associée au message : c'est le principe de redéfinition des messages .</p></br>
		
		<p><strong>Modélisation objet </strong> </br>
		La modélisation objet consiste à créer un modèle informatique du système de l’utilisateur (un système informatique). Ce modèle peut rassembler aussi bien des éléments du monde réel que des concepts ou des idées propres au métier ou au domaine duquel fera partie le système.</p></br>
	
			
		<?php echo '<p><strong>' . htmlspecialchars($_POST['mot']) . '</strong> </br>' . ($_POST['txt']) . '</p>'; ?>		
	</section>			
				

	<?php include('footer.php'); ?> 
							
					
					
	</body> 
</html> 
