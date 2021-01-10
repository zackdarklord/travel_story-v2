<?php
//get values from login.php
$login=$_POST['username'];
$pass=$_POST['password'];
$verif=1;
//connect database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_story";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


use \entities\Member;
if (! empty($_POST["login"])) {
    session_start();
    $username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    require_once (__DIR__ . "./class/Member.php");
    
    $member = new Member();
    $isLoggedIn = $member->processLogin($username, $password);
    if (! $isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
    }
    header("Location: ./index.php");
    exit();
}



























//query data base for user
$pdoStat=$conn->prepare('SELECT * FROM clients');


$execute= $pdoStat->execute();


$clients=$pdoStat->fetchAll();

foreach($clients as $client):
    if ($client['mail']==$login && $client['mdp']==$pass)
    {
        echo "login success!!! welcome".$login;
        $verif=0;
        header('Location: http://localhost/project/php/boutique.php?login='.$login);
        
    }
endforeach;
if ($verif==1)
{
    echo "<p style='color:red'>failed to login</p>";
    header('Location: http://localhost/project/views/login.php');
}
?>