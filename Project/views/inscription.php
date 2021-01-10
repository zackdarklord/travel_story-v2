<!doctype html>
<html>
    <head>
        <title>travel story-inscription</title>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../assets/css/style_inscr.css" media="screen" type="text/css" />
    </head>
    <body>
        <a href="../views/home.php"><img src="../assets/images/logo.png" alt="logo" height="150" width="120"></a>
        <div id="container">
            <!-- zone d'inscription -->
            
            <form action="../php/connect_inscri.php" method="POST">
                <h1>inscription</h1>
                
                <label><b>nom</b></label>
                <input type="text" placeholder="votre nom" name="nom" required>

                <label><b>prenom</b></label>
                <input type="text" placeholder="votre prenom" name="prenom" required>
               
                <br>
                <label><b>date de naissance</b></label>
                <input type="date"  name="date_nais" required>
                <br>
                <div class="sexe">
                    <label><b>sexe</b>
                        <br>
                       homme<input type="radio"  name="sexe" value="homme" ><label for=""></label>
                       femme<input type="radio"  name="sexe" value="femme" ><label for=""></label>
                        </label>
                </div>
                
                <br>
                
                
                <label><b>telephone</b></label>
                <input type="tel" placeholder="xx-xxx-xxx" name="tel" pattern="[0-9]{2}-{0-9]{3}-{0-9]{3}" required>
                <br>
                <label><b>adresse</b></label>
                <input type="text" placeholder="votre adresse" name="adresse" required>
             
                
                <label><b>login</b></label>
                <input type="email" placeholder="votre login" name="mail" required>
                <label><b>mot de passe</b></label>
                <input type="password" placeholder="votre mot de passe" name="pass" required>
                
                <input type="submit" id='submit' value='inscription' >
                <input type="reset" id="annuler" value="annuler">
            </form>
        </div>
        <?php include '../php/footer.php' ?>    

    </body>
</html>