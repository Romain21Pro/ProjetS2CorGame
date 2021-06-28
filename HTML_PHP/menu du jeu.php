<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="..\CSS\style menu jeu.css"/>
  </head>
  <body>

    <?php
      session_start();

     ?>

    <?php

  $valeurréel = 0.75;
  $coeur = "..\Images\coeur.png";
  $pointcoeur = 3;
  $pointargent = 0;
   ?>
      <div class="gridLeft"></div>
      <div class="gridMiddle">
    <table class="center">
<tr>

<td><img height="20" src="..\Images\coeur.png" alt="coeur"></td>
<td><?php
  if (!isset($_SESSION['pointcoeur'])){
    echo 0;
  } else{
    echo $_SESSION['pointcoeur'];
  }
  ?></td>
<td><img height="20" src="..\Images\piece.png" alt="piece"></td>
<td><?php if (!isset($_SESSION['pointargent'])){
      echo 0;
    } else{
      echo $_SESSION['pointargent'];
    }
?></td>
<td><div id="high_score">meilleur score: </div>
<td><?php echo $_SESSION['HighScore']; ?></td>
</td>
<td>
  <header>
    <aside>
    <div id="titre" class="element">
    <a href="MainMenu.php">RETOUR AU MENU</a><div></aside>
  </header>
</td>
</tr>
<tr>
  <td>  <div id="r-output" id="width: 100%; padding: 25px;">
          <?php
            // Execute the R script within PHP code
            // Generates output as test.png image.
            exec('test_corr.R', $output);
            $corr = substr($output[0], 3, 6);
            $_SESSION['corr'] = $corr;
          ?>
          <img src="test.png?var1.1" alt="R Graph"/>
        </div><br>
  </td>
  <td><div></div></td>
  <td> <div></div> </td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td></td>
    <td></td>
</tr>
<tr>
  <td colspan="2"><form  action="menu du jeu page 2.php" method="post">
    <input class="abc" type="text" name="estimation" value="0.">
    <input  id="guess"type="submit" name="guess" value="GUESS">
    </form></td>
    <td></td>
    <td></td>
</tr>
  </table>
    <div class="gridRight"></div>
  </body>
</html>
