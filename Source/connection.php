


<?php
if(!$_COOKIE['connected']){
  header("Location: Page_de_connexion.php");
}

$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=assist_com', $user, $pass);

$mail=$_GET['mail'];
$mdp=$_GET['mdp'];

$stmt = $dbh->prepare("SELECT * from commercial WHERE mail like :mail");
$stmt->bindparam(":mail",$mail);
$res = $stmt->execute();
$row = $stmt->fetch();
$mdp_com = $row['mdp'];
$id_com = $row['idCommercial'];

if($mdp_com == $mdp){
	echo "Connection";
	setcookie("connected",true);
	setcookie("COMMID",$id_com);
	header("Location: Page_d'accueil.php");
}
?>
