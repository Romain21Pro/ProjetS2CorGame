<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the correlation</title>
    <link rel="stylesheet" href="..\CSS\MainStyle.css">
  </head>
  <body>

    <?php
      //include("connexion.php");
      //connectMaBase();
    ?>
    <div class="grid-container">
      <div class="gridLeft"></div>
      <div class="gridMiddle">
        <div id="Menu">
          <img src="..\Images\guesscor_logo.svg" alt="GuessTheCorrelation">
          <div id="MenuF">
            <label for="pseudo">pseudo :</label>
            <input type="text" id="pseudo" name="pseudo">
          </div><br><br>
          <div id="MenuF" class="Navigation">
            <div class="menuItem">
              <a href="menu du jeu.html" id="hoverTest" >NOUVELLE PARTIE</a>
              <img src="..\Images\arrow.svg" id="arrow1">
            </div><br><br>
            <div class="menuItem">
              <a href="menu du jeu page 2.html" id="hoverTest">RESUME GAME</a>
              <img src="..\Images\arrow.svg" id="arrow1">
            </div><br><br>
            <div class="menuItem">
              <a href="#TwoPlayers" id="hoverTest">TWO PLAYERS</a>
              <img src="..\Images\arrow.svg" id="arrow1">
            </div><br><br>
            <div class="menuItem">
              <a href="#ScoreBoard" id="hoverTest">SCORE BOARD</a>
              <img src="..\Images\arrow.svg" id="arrow1">
            </div><br><br>
            <div class="menuItem">
              <a href="about.html" id="hoverTest">ABOUT</a>
              <img src="..\Images\arrow.svg" id="arrow1">
            </div><br><br>
            <div class="menuItem">
              <a href="settings.html" id="hoverTest">SETTINGS</a>
              <img src="..\Images\arrow.svg" id="arrow1">
            </div><br><br>
          </div>
          <h3 id="HS">HIGH SCORE</h3>
        </div>
      <div class="gridRight"></div>
    </div>


  </body>
</html>
