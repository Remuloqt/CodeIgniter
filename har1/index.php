<?php
session_start();
if($_SESSION['login']==TRUE) {
	$user=$SESSION['tunnus'];
}
else {
	$user="Vieras";
}
?>
<?php include "valikko.php"; ?>
<h1>Pääsivu</h1>
<?php echo 'Tervetuloa' .$user; ?>
<p>
	Tässä harjoituksessa opetellaan php:n perusteita.
</p>

<?php include "footer.php"; ?>