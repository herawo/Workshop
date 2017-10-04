<?php

$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=assist_com', $user, $pass);

$date=$_POST['date'];
$contact_mail=$_POST['contact_mail'];
$full_description=$_POST['full_description'];
$contact_name=$_POST['contact_name'];
$title=$_POST['title'];
$duration_month=$_POST['duration_month'];
$start=$_POST['start'];
$location=$_POST['location'];
$rate=$_POST['rate'];
$file=$_POST['file'];



$stmt = $dbh->prepare("INSERT INTO projet(date, contact_mail, full_description, contact_name, title, duration_month, start, location, rate, file)  VALUES (:date, :contact_mail, :full_description, :contact_name, :title, :duration_month, :start, :location, :rate, :file)");

$stmt->bindParam(':date', $date);
$stmt->bindParam(':contact_mail', $contact_mail);
$stmt->bindParam(':full_description', $full_description);
$stmt->bindParam(':contact_name', $contact_name);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':duration_month', $duration_month);
$stmt->bindParam(':start', $start);
$stmt->bindParam(':location', $location);
$stmt->bindParam(':rate', $rate);
$stmt->bindParam(':file', $file);

$stmt->execute();

?>