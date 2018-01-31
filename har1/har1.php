<!DOCTYPE html>
<html>
<head>
<title>PHP perusteet</title>
<?php

	class Foo{
		
		function taulukko(){
			$henkilo = array(
			"Peter" => "Kinnunen",
			"Teemu" => "Kallela",
			"Tuure" => "Kettunen");
			
			foreach($henkilo as $enimi => $snimi)
			{
				echo "$enimi $snimi<br/>";
			}
		}
		
		
	}


	/*echo "<pre>";
	var_dump ($henkilo);
	echo "</pre>";*/
	

	if(isset($_POST['btn'])){
	$enimi=$_POST['en'];
	$snimi=$_POST['sn'];
	echo 'Terve '. $enimi, ' ',$snimi;
	}
?>
<h1>Henkilötiedot</h1>
<FORM action="har1.php" method="POST">
<label>Etunimi</label><input type="text" name="en">
<br>
<label>Sukunimi</label><input type="text" name="sn">
<input type="submit" name="btn" value="Lähetä">
</FORM>
</body>
</html>
