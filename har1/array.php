<?php
session_start();
if($_SESSION['login']!=TRUE)
{
	header('Location:login.php');
}
?>
<?php include "valikko.php"; ?>
<h1>Array esim</h1>
<p>
	Tässä harjoituksessa opetellaan php:n perusteita.
</p>
<?php
$asiakas array(
		array("en"=>'Teppo', "sn"=>'Testi'),
		array("en"=>'Jussi', "sn"=>'Virtanen'),
		array("en"=>'Kalevi', "sn"=>'Haglund'),
		array("en"=>'Uolevi', "sn"=>'Joki')
		);
?>
<h2>Yksi alko</h2>
<?php
	echo 'Ensimmäinen etunimi on ' .$asiakas[0]['en'];
	echo '<br>';
	echo 'Toinen Sukunimi on ' .$asiakas[1]['sn'];
?>
<h2> Kaikki alkiot</h2>
<?php
echo 'Taulukon sisältö:<br>';
print_r($asiakas);
?>
<h2>Kaikki alkiot taulukkona</h2>
<TABLE BORDER=1>
<TR><TH>Etunimi</TH><TH>Sukunimi</TH></TR>
<?php
foreach($asiakas as $rivi){
	echo '<tr><td>' .$rivi['en'] .'</td><td>' .$rivi['sn'] .'</td></tr>';
}
?>
</TABLE>

<?php include "footer.php"; ?>