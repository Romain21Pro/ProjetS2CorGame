<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the correlation</title>
    <link rel="stylesheet" href="..\CSS\MainStyle.css">
  </head>

  <?php
    session_start();

    if (isset($_POST['pseudo'])) {
      $_SESSION['pseudo']=$_POST['pseudo'];
    }
   ?>

  <body>
    <div class="grid-container">
      <div class="gridLeft"></div>
      <div class="gridMiddle">
        <div id="Menu">
          <img src="..\Images\guesscor_logo.svg" alt="GuessTheCorrelation">
          <div id="MenuF">
          <?php
           if(isset($_POST['pseudo'])){
             ?>
             <label for="pseudo">pseudo :</label>


            <?php
              $pseudo=$_POST['pseudo'];
              include("connexion.php");
              $mysqli = connectMaBase();
              $requete = "SELECT COUNT(pseudo) FROM utilisateurs WHERE pseudo='$pseudo'";
              $result = $mysqli->query($requete);
              $row = mysqli_fetch_array($result);
              $value = $row[0];
              if ($value==0){
                $requete = "INSERT INTO `utilisateurs`(`pseudo`) VALUES ('$pseudo')";
                $result = $mysqli->query($requete);
                //print $mysqli->error;
                echo strtolower($pseudo);
              }
              else{
                echo strtolower($pseudo);
              }


              ?>
              <form class="" action="MainMenu.php" method="post" id="deconnectForm">
                <input type="submit" name="deconnexion" value="Déconnection">
              </form>
            <?php
             }
             else {
            ?>
               <form class="" action="MainMenu.php" method="post" id="connectForm">
                 <label for="pseudo">pseudo :</label>
                 <input type="text" id="pseudo" name="pseudo">
                 <input type="submit" name="connexion" value="Connexion">
               </form>
            <?php
             }
            ?>
          </div><br><br>
          <div id="MenuF" class="Navigation">
            <?php
              if (isset($_SESSION['pointcoeur'])) {
            ?>
              <div class="menuItem">
                <a href="menu du jeu.php" id="hoverTest">REPRENDRE UNE PARTIE</a>
                <img src="..\Images\arrow.svg" id="arrow1">
              </div><br><br>
             <?php
               } else {
                ?>
                <div class="menuItem">
                  <a href="menu du jeu.php" id="hoverTest" >NOUVELLE PARTIE</a>
                  <img src="..\Images\arrow.svg" id="arrow1">
                </div><br><br>
            <?php
               }
             ?>
            <div class="menuItem">
              <a href="#TwoPlayers" id="hoverTest">DEUX JOUEURS</a>
              <img src="..\Images\arrow.svg" id="arrow1">
            </div><br><br>
            <div class="menuItem">
              <a href="scoreboard.php" id="hoverTest">SCORE BOARD</a>
              <img src="..\Images\arrow.svg" id="arrow1">
            </div><br><br>
            <div class="menuItem">
              <a href="about.html" id="hoverTest">A PROPOS</a>
              <img src="..\Images\arrow.svg" id="arrow1">
            </div><br><br>
            <form class="" action="settings.php" method="post">
              <div class="menuItem">
                <a href="settings.php" id="hoverTest">PARAMETRES</a>
                <img src="..\Images\arrow.svg" id="arrow1">
              </div><br><br>
            </form>

          </div>
          <h3 id="HS">MEILLEUR SCORE</h3>
          <div id="MenuF">
            <?php
              if (isset($_POST['pseudo'])) {
                $requete = "SELECT MAX(parties.score) FROM utilisateurs, parties WHERE parties.fk_pseudoUser = utilisateurs.pseudo AND parties.fk_pseudoUser='$pseudo'";
                $result = $mysqli->query($requete);
                $row = mysqli_fetch_array($result);
                $value = $row[0];
                if (is_null($value)) {
                  $_SESSION['HighScore']=0;
                  echo 0;
                }
                else{
                  $_SESSION['HighScore']=$value;
                  echo $value;
                }
                $mysqli->close();
              }else {
                echo 0;
              }

             ?>
          </div>
        </div>
      <div class="gridRight"></div>
    </div>


  </body>
</html>
