<?php

if(!$_COOKIE['connected']){
  header("Location: Page_de_connexion.php");
}

$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=assist_com', $user, $pass);

$date=date("d.m.y");
$contact_mail=$_POST['contact_mail'];
$full_description=$_POST['full_description'];
$contact_name=$_POST['contact_name'];
$title=$_POST['title'];
$duration_month=$_POST['duration_month'];
$duration_day=$_POST['duration_day'];
$start=$_POST['start'];
$location=$_POST['location'];
$rate=$_POST['rate'];
$file=$_POST['file'];
$creator=$_COOKIE['COMMID'];
$statut="Attente";


$stmt = $dbh->prepare("INSERT INTO projet(date, contact_mail, full_description, contact_name, title, duration_month, duration_day, start, location, rate, file, creator, statut)  VALUES (:date, :contact_mail, :full_description, :contact_name, :title, :duration_month, :duration_day, :start, :location, :rate, :file, :creator, :statut)");

$stmt->bindParam(":date", strtotime($date));
$stmt->bindParam(':contact_mail', $contact_mail);
$stmt->bindParam(':full_description', $full_description);
$stmt->bindParam(':contact_name', $contact_name);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':duration_month', $duration_month);
$stmt->bindParam(':duration_day', $duration_day);
$stmt->bindParam(':start', $start);
$stmt->bindParam(':location', $location);
$stmt->bindParam(':rate', $rate);
$stmt->bindParam(':file', $file);
$stmt->bindParam(':creator',$creator);
$stmt->bindParam(':statut',$statut);

$stmt->execute();

header('Location: Page_d\'accueil.php');

?>