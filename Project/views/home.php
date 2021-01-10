<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/home.css">
    <title>travel_story</title>
</head>
<body>
<nav>
    <a href="../views/home.php"><img src="../assets/images/logo.png" alt="logo" class="logo" height="150" width="120"></a>
    <ul>
        <li><a href="../views/home.php">home</a></li>
        <li><a href="#offre">offres</a></li>
        <li><a href="#actualite">actualités</a></li>
        <li><a href="#dest">destinations</a></li>
        <li><a href="#contact">contact</a></li>

        <li><a href="../views/login.php" >connexion</a></li>
        <li><a href="../views/inscription.php" >inscription</a></li>
        
    </ul>
    </nav>
    <div id="offre" class="cont">
     <div class="title1">
    <h1>Nos Meilleurs Offres</h1>
     </div>
     <div class="cont_offres">
     <img src="../assets/images/gif.gif" width="60%" height ="60%">
     </div>
    </div>
    <div id="actualite" class="cont">
        <div class="title2">
            <h1>Actualités</h1>
        </div>
        <img src="../assets/images/gif1.gif" width="60%" height ="60%">
    </div>
    <h1 align="center" style="color:aliceblue" id="dest">Nos Meilleures Destinations</h1>
           </div>
           <div class="cont_dest">
               <table align="center">
                   <tr>
                       <td>
                           <img src="../assets/images/indonesia.png" alt="indonesia" width="300" height="250">
                           <p style="color: aliceblue;"><em>indonesia</em></p>
                           <p><strong style="color: aliceblue;">12 Days , 13 Nights</strong></p>
                       </td>
                       <td><img src="../assets/images/england.png" alt="england" width="300" height="250">
                        <p style="color: aliceblue;"><em>england</em></p>
                        <p><strong style="color: aliceblue;">6 Days , 7 Nights</strong></p>
                    </td>
                       <td>
                           <img src="../assets/images/dominican republic.png" alt="dominican"width="300" height="250">
                           <p style="color: aliceblue;"><em>dominican republic</em></p>
                           <p><strong style="color: aliceblue;">10 Days , 11 Nights</strong></p>
                           
                       </td>
                       
                   </tr>
                   <tr>
                    <td>
                        <img src="../assets/images/maldives.png" alt="dominican"width="300" height="250">
                        <p style="color: aliceblue;"><em>maldives</em></p>
                           <p><strong style="color: aliceblue;">5 Days , 6 Nights</strong></p>
                    </td>
                    <td>
                        <img src="../assets/images/uae.png" alt="dominican"width="300" height="250">
                        <p style="color: aliceblue;"><em>united arabic emirates</em></p>
                           <p><strong style="color: aliceblue;">7 Days , 8 Nights</strong></p>
                    </td>
                    <td>
                        <img src="../assets/images/italy.png" alt="dominican"width="300" height="250">
                            <p style="color: aliceblue;"><em>italy</em></p>
                           <p><strong style="color: aliceblue;">7 Days , 8 Nights</strong></p>
                    </td>
                    
                </tr>
               </table>
    
            </section>
           </div>
           <br>
           <br>
       </div>
    <div class="avis">
        <div class="cont_avis">
     <form action="../php/ajout_avis.php" method="POST">
      <label for=""><b>VEUILLEZ ENTRER VOTRE AVIS ICI:</b></label>
      <br>
      <textarea name="avis" id="avis-cont" cols="100" rows="2" placeholder="..."></textarea>   
       <button type="submit">envoyer</button>     
    </form>
    </div>
    </div>
    <?php include '../php/footer.php' ?>   
   
</body>
</html>