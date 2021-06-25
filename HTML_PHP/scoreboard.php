<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scoreboard</title>
  <link rel="stylesheet" href="..\CSS\styleScoreboard.css">
</head>
  <body>

    <div class="grid-container">
        <div class="gridLeft"></div>
          <header>
          <aside>
          <div id="titre" class="element">
            <a href="MainMenu.php">RETOUR AU MENU</a></aside>
          </header>
        <div class="gridMiddle1">
          <h2>PSEUDO</h2>
        <?php

          include("connexion.php");
          $mysqli = connectMaBase();
          //require_once(userguessthecorrelation);
          $requete="SELECT utilisateurs.pseudo, parties.score FROM parties, utilisateurs WHERE utilisateurs.noUser = parties.fk_noUser ORDER BY parties.score DESC";
          $result = $mysqli->query($requete);
          while($row = mysqli_fetch_array($result)) {
          //  echo $row;
            echo $row[0]."<br/>";
          }
        ?>

        </div>
        <div class="gridMiddle2">
          <h2>SCORE</h2>
          <?php
            $requete="SELECT utilisateurs.pseudo, parties.score FROM parties, utilisateurs WHERE utilisateurs.noUser = parties.fk_noUser ORDER BY parties.score DESC";
            $result = $mysqli->query($requete);
            while($row = mysqli_fetch_array($result)) {
              echo $row[1]."<br/>";
            }
           ?>
        </div>
        <div class="gridRight"></div>
      </div>
  </div>
  </body>
</html>
