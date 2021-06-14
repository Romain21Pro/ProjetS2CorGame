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
          </div><br>
          <div id="MenuF" class="Navigation">
            <a href="menu du jeu.html">NOUVELLE PARTIE</a><br>
            <a href="menu du jeu.html">RESUME GAME</a><br>
            <a href="#TwoPlayers">TWO PLAYERS</a><br>
            <a href="#ScoreBoard">SCORE BOARD</a><br>
            <a href="about.html">ABOUT</a><br>
            <a href="settings.html">SETTINGS</a>
          </div>
          <h3 id="HS">HIGH SCORE</h3>
        </div>
      <div class="gridRight"></div>
    </div>


  </body>
</html>
