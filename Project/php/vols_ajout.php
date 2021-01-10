<?php
    // Enable us to use Headers
    ob_start();

    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travel_story";

    $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");

	$depart = $_POST["depart"];
	$date_depart = $_POST["date_depart"];
	$destination = $_POST["destination"];
	$date_retour = $_POST["date_retour"];
    $compagnie = $_POST["compagnie"];


	try {
	$dsn = 'mysql:host=localhost;dbname=travel_story;charset=utf8';
	$dbc = new PDO($dsn, $username, $password);
	//$dbc = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	 $sql = "INSERT INTO vols (depart, date_depart, destination, date_retour, compagnie) VALUES ('$depart', '$date_depart', '$destination', '$date_retour', '$compagnie');";
     $dbc->query($sql);

     var_dump($dbc);

$connection->close();
 header('Location: http://localhost/project/php/gestion_vols.php');
exit;

} catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
?>
