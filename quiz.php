<!DOCTYPE html > 
<html> 
	<head>
	<link rel="stylesheet" href="style.css"/> 
	<title>Up-Grades : Notes</title> 
	<meta charset="utf-8" /> 
	</head> 
	
	<script type='text/javascript'>
		var vrai=0;
	</script>
	
	<script type='text/javascript'>
	function adjime()
	{
		document.getElementById("go").style.display="none";
		document.getElementById('pr1').style.display="";
	}
	</script>
	
	
	<script type='text/javascript'>
	function foncquizvrai1(idpr)
	{
		var pr = document.getElementById(idpr);
		var pr1 = document.getElementById('v1');
		var pr2 = document.getElementById('q1');
		
			pr.style.color="green";
			pr1.style.color="green";
			document.getElementById('f11').disabled = true; 
			document.getElementById('v1').disabled = true;
			document.getElementById('f12').disabled = true;
			document.getElementById('f13').disabled = true;
			document.getElementById('pr2').style.display="";
			vrai=vrai+1;
			}
	</script>
		
	<script type='text/javascript'>
	function foncquizfaux1(idpr)
	{
		var pr = document.getElementById(idpr);
		var pr1 = document.getElementById('q1');
		
			pr.style.color="red";
			pr1.style.color="red";
			document.getElementById('f11').disabled = true; 
			document.getElementById('v1').disabled = true;
			document.getElementById('f12').disabled = true;
			document.getElementById('f13').disabled = true; 
			document.getElementById('pr2').style.display="";
	}
	</script>
	
	<script type='text/javascript'>
	function foncquizvrai2(idpr)
	{
		var pr = document.getElementById(idpr);
		var pr1 = document.getElementById('v2');
		var pr2 = document.getElementById('q2');
		
			pr.style.color="green";
			pr1.style.color="green";
			document.getElementById('f21').disabled = true; 
			document.getElementById('v2').disabled = true;
			document.getElementById('f22').disabled = true;
			document.getElementById('f23').disabled = true;
			document.getElementById('pr3').style.display="";
			vrai=vrai+1;
	}
	</script>
		
	<script type='text/javascript'>
	function foncquizfaux2(idpr)
	{
		var pr = document.getElementById(idpr);
		var pr1 = document.getElementById('q2');
		
			pr.style.color="red";
			pr1.style.color="red";
			document.getElementById('f21').disabled = true; 
			document.getElementById('v2').disabled = true;
			document.getElementById('f22').disabled = true;
			document.getElementById('f23').disabled = true; 
			document.getElementById('pr3').style.display="";
			
	}
	</script>
	
	<script type='text/javascript'>
	function foncquizvrai3(idpr)
	{
		var pr = document.getElementById(idpr);
		var pr1 = document.getElementById('v3');
		var pr2 = document.getElementById('q3');
		
			pr.style.color="green";
			pr1.style.color="green";
			document.getElementById('f31').disabled = true; 
			document.getElementById('v3').disabled = true;
			document.getElementById('f32').disabled = true;
			document.getElementById('f33').disabled = true;
			document.getElementById('pr4').style.display="";
			vrai=vrai+1;
			
	}
	</script>
		
	<script type='text/javascript'>
	function foncquizfaux3(idpr)
	{
		var pr = document.getElementById(idpr);
		var pr1 = document.getElementById('q3');
		
			pr.style.color="red";
			pr1.style.color="red";
			document.getElementById('f31').disabled = true; 
			document.getElementById('v3').disabled = true;
			document.getElementById('f32').disabled = true;
			document.getElementById('f33').disabled = true; 
			document.getElementById('pr4').style.display="";
	}
	</script>
	
	<script type='text/javascript'>
	function foncquizvrai4(idpr)
	{
		var pr = document.getElementById(idpr);
		var pr1 = document.getElementById('v4');
		var pr2 = document.getElementById('q4');
		
			pr.style.color="green";
			pr1.style.color="green";
			document.getElementById('f41').disabled = true; 
			document.getElementById('v4').disabled = true;
			document.getElementById('f42').disabled = true;
			document.getElementById('f43').disabled = true;
			vrai=vrai+1;
				}
	</script>
		
	<script type='text/javascript'>
	function foncquizfaux4(idpr)
	{
		var pr = document.getElementById(idpr);
		var pr1 = document.getElementById('q4');
		
			pr.style.color="red";
			pr1.style.color="red";
			document.getElementById('f41').disabled = true; 
			document.getElementById('v4').disabled = true;
			document.getElementById('f42').disabled = true;
			document.getElementById('f43').disabled = true; 
	}
	</script>


	<script type='text/javascript'>
	function result()
	{
		alert("Nombre de bonnes réponses : "+vrai+" \nNombre de mauvaises réponses : "+(4-vrai));

	}
	</script>
	
	<?php include('header.php'); ?>


	<nav>
		<ul>
		<li>Programmation</li>
        <li>Maths</li>
 		<li>Français</li>
		<li>Histoire</li>
		<li>Chimie</li>
		<li>Ajouter cours</li>
        </ul>
	</nav>
	
	<body>
		
		<h1>
			QUIZ : Programmation orientée objet
		</h1>



<br>
<input type="button" onclick="adjime();" id="go" value="Commencer le quiz" name="go"/>


<div id="pr1" style="display:none" style='border:1px double black'>
<fieldset>
<legend>Question 1</legend>
<center>
<p><strong>Définition et interaction de briques logicielles appelées objets.</p></br>
<div id="q1">
<p><input type="button" onclick="foncquizfaux1('pr1');" id="f11" value="" name="rep1"/></p>
<p><input type="button" onclick="foncquizvrai1('pr1');" id="v1" value="Programmation orientée objet" name="rep2"/></p>
<p><input type="button" onclick="foncquizfaux1('pr1');" id="f12" value="" name="rep3"/></p>
<p><input type="button" onclick="foncquizfaux1('pr1');" id="f13" value="" name="rep4"/></p>
</div>
</center>
</fieldset>
</div> 



<div id="pr2"  style="display:none" style='border:1px double black'>
<fieldset>
<legend>Question 2</legend>
<center>
<p><strong>Définition et interaction de briques logicielles appelées objets.</p></br>
<div id="q2">
<p><input type="button" onclick="foncquizfaux2('pr2');" id="f21" value="" name="rep1"/></p>
<p><input type="button" onclick="foncquizvrai2('pr2');" id='v2' value="Programmation orientée objet" name="rep2"/></p>
<p><input type="button" onclick="foncquizfaux2('pr2');" id="f22" value="" name="rep3"/></p>
<p><input type="button" onclick="foncquizfaux2('pr2');" id="f23" value="" name="rep4"/></p>
</div>
</center>
</fieldset>
</div>   


<div id="pr3" style="display:none" style='border:1px double black'>
<fieldset>
<legend>Question 3</legend>
<center>
<p><strong>Définition et interaction de briques logicielles appelées objets.</p></br>
<div id="q3">
<p><input type="button" onclick="foncquizfaux3('pr3');" id="f31" value="" name="rep1"/></p>
<p><input type="button" onclick="foncquizvrai3('pr3');" id='v3' value="Programmation orientée objet" name="rep2"/></p>
<p><input type="button" onclick="foncquizfaux3('pr3');" id="f32" value="" name="rep3"/></p>
<p><input type="button" onclick="foncquizfaux3('pr3');" id="f33" value="" name="rep4"/></p>
</div>
</center>
</fieldset>
</div> 


<div id="pr4" style="display:none" style=' border:1px double black'>
<fieldset>
<legend>Question 4</legend>
<center>
<p><strong>Définition et interaction de briques logicielles appelées objets.</p></br>
<div id="q4">
<p><input type="button" onclick="foncquizfaux4('pr4');result();" id="f41" value="" name="rep1"/></p>
<p><input type="button" onclick="foncquizvrai4('pr4');result();" id='v4' value="Programmation orientée objet" name="rep2"/></p>
<p><input type="button" onclick="foncquizfaux4('pr4');result();" id="f42" value="" name="rep3"/></p>
<p><input type="button" onclick="foncquizfaux4('pr4');result();" id="f43" value="" name="rep4"/></p>
</div>
</center>
</fieldset>
</div> 
				
			

					

	<?php include('footer.php'); ?> 
							
					
					
	</body> 
</html> 
