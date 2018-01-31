<!DOCTYPE html>
<html>
<head>
<title>PHP perusteet</title>
<?php

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
<?php include "footer.php"?>