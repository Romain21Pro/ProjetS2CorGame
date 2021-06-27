<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="..\CSS\style.css"/>
    <title>PARAMETRE</title>
  </head>
  <body>
    <?php
      session_start();
     ?>

    <div class="grid-container">
      <div class="gridLeft"></div>
      <div class="gridMiddle">
        <header>
        <aside>
        <div id="titre" class="element">
          <a href="MainMenu.php">RETOUR AU MENU</a></div></aside></header>
        <br>

     <div id="titre"><FONT color="black">PARAMETRES :</FONT></div>
         <br>
          <button type="submit" name="effacement" onclick="eraseData()">EFFACER TOUTES LES DONNEES</button>
          <script type="text/javascript">
          function eraseData() {
            if (confirm("Voulez vous vraiment suprimer toutes les données de votre compte ?")) {
              alert('<?php
                        include("connexion.php");
                        $mysqli = connectMaBase();
                        $pseudo = $_SESSION['pseudo'];
                        $requete = "DELETE FROM parties WHERE fk_pseudoUser='$pseudo'";
                        $result = $mysqli->query($requete);
                        //print $mysqli->error;
                        $requete2 = "DELETE FROM utilisateurs WHERE pseudo='$pseudo'";
                        $result = $mysqli->query($requete2);
                        //print $mysqli->error;
                        session_destroy();
                     ?>')
            } else {
              alert('<?php
                      echo "Les données sont bien rester sauvegardées";
                     ?>')
            }
          }
          </script>
         <br>
         <br>
         <FONT color="orange">Avertissement : Cela effacera votre nom et votre meilleur score du tableau des scores et reinitialisera toutes les preferences de jeu.</FONT>

       </div>
       <div class="gridRight"></div>
     </div>

   </body>
</html>
