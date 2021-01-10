<html>
    <head>
        <title>travel story-connexion</title>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../assets/css/style_conn.css" media="screen" type="text/css" />
    </head>
    <body>
        <a href="../views/home.php"><img src="../assets/images/logo.png" alt="logo" height="150" width="120"></a>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="../php/verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>login</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                
            </form>
        </div>
        <?php include '../php/footer.php' ?>    
    </body>
</html>