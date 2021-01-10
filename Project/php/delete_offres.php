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

$id=$_GET['id'];

try {
    $dsn = 'mysql:host=localhost;dbname=travel_story;charset=utf8';
    $dbc = new PDO($dsn, $username, $password);
    //$dbc = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "DELETE FROM offres WHERE id = $id";
    var_dump($sql);
    $dbc->query($sql);


    $connection->close();
    header('Location: http://localhost/project/php/offres.php');
    exit;

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>