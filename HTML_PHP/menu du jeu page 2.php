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
  $valeurréel = 0.75;
  $coeur = "..\Images\coeur.png";
  $pointcoeur = 3;
  $pointargent = 0;
   ?>
      <div class="gridLeft"></div>
      <div class="gridMiddle">
    <table class="center">
<tr>
<td>
<?php if (abs($_POST['estimation']-$valeurréel)>0.10) {$pointcoeur=$pointcoeur-1;
};if (abs($_POST['estimation']-$valeurréel)<0.05 && $pointcoeur<3 ) {$pointcoeur=$pointcoeur+1;$pointargent=$pointargent+5;
};if (abs($_POST['estimation']-$valeurréel)<=0.10 && abs($_POST['estimation']-$valeurréel)>=0.05 ) {$pointargent=$pointargent+1;
};echo "<img src=$coeur height=20>"; echo "$pointcoeur";
 ?></td>
<td></td>
<td><div id="high_score">high score</div>
</td>
<td><form action="MainMenu.html" method="post">
  <input id="menu" type="button" name="main menu" value="main menu">
    </form></td>
</tr>
<tr>
  <td>  <img height="20" src="..\Images\piece.png" alt="piece"><br>
  </td>
  <td><div><?php echo "$pointargent"; ?></div></td>
  <td> <div>0</div> </td>
  <td></td>
</tr>
<tr>
  <td colspan="2"><img src="..\Images\exemple corrélation.png" alt="correlation"></td>
  <td></td>
    <td></td>
</tr>
<tr>
  <td colspan="2">
    <form  action="menu du jeu.php" method="post">
      <input type="text" name="coeur" value=$pointcoeur>
      <input type="text" name="argent" value=$pointargent>
    <input id="guess"type="submit" name="suivant" value="NEXT"></td>
    <td></td>
    <td></td>
</tr>
<tr>
  <td><div>true r</div></td>
  <td><div><?php echo $valeurréel ?></div></td>
  <td></td>
</tr>
<tr>
  <td><div>guessed r</div></td>
  <td>0</td>
  <td></td>
</tr>
<tr>
  <td><div>difference</div></td>
  <td><div>0</div></td>
  <td></td>
</tr>
<tr>
   <td><div>streaks</div> </td>
   <td><div>0</div></td>
   <td></td>
</tr>
<tr>
  <td><div>mean error</div> </td>
  <td><div>_</div></td>
  <td></td>
</tr>
<tr>
  <td>  <?php if (abs($_POST['estimation']-$valeurréel)<0.05 ) {echo'<img height="20"src="..\Images\coeur.png" alt="coeur">';echo "+1";echo '<img height="20" src="..\Images\piece.png" alt="piece">';echo "+5";
  } if (abs($_POST['estimation']-$valeurréel)>0.10 ) {echo'<img height="20"src="..\Images\coeur.png" alt="coeur">';echo "-1";}
      if (abs($_POST['estimation']-$valeurréel)>=0.05 && abs($_POST['estimation']-$valeurréel)<=0.10) {echo '<img height="20" src="..\Images\piece.png" alt="piece">';echo "+1";}
        ?></td>
  <td></td>
  <td></td>
</tr>
  </table>
    <div class="gridRight"></div>
  </body>
</html>
