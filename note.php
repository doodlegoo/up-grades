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


	<div id="hautdroitnote" style="position:absolute;right:1px; top: 10px; width:150px;">
		<img src='avatar.png' alt="Avatar" title="Avatar" style="align: right"/>
		<input type="button" value="Changer d'avatar" name="changeavatar"/>
	</div>

	<nav>
		<ul>
        <li>Maths</li>
 		<li>Français</li>
		<li>Histoire</li>
		<li>Chimie</li>
        </ul>
	</nav>
	
	<body>

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
<legend>Ajouter une définition</legend>
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


			
	<section>		
	<?php echo '<p><strong>' . htmlspecialchars($_POST['mot']) . '</strong> </br>' . ($_POST['txt']) . '</p>'; ?>		
	</section>			
				

	<?php include('footer.php'); ?> 
							
					
					
	</body> 
</html> 
