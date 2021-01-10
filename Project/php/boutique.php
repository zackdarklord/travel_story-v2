<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/boutique.css">
    <title>travel_story-boutique</title>
</head>
<body>
<nav>
    <a href="boutique.php"><img src="../assets/images/logo.png" alt="logo" class="logo" height="150" width="120"></a>
    <ul>
        <li><strong><p style="color:darkorange">BIENVENUE CHER(E) CLIENT(E)</p></strong></li>
        <li><a href="vols_client.php">vols</a></li>
        <li><a href="billets_client.php">billets</a></li>
        <li><a href="offre_client.php">offres/actualités</a></li>
        <li><a href="#" >panier</a></li>
        <li><a href="../views/home.php"><strong>logout</strong></a></li>
        
    </ul>
    </nav>
    <div class="" style="color:aliceblue">
  <img src="../assets/images/img_avatar.png" alt="Avatar" width="150" height="200">
  <div class="container">
    <h4><b><?php echo $_GET['login'];?></b></h4>
    
  </div>
</div> 
</body>
<?php include 'footer.php' ?>
</html>