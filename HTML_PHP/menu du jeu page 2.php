<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="..\CSS\style menu jeu.css"/>
  </head>
  <?php
    session_start();

    if (isset($_POST['pseudo'])) {
      $_SESSION['pseudo']=$_POST['pseudo'];
    }
   ?>
  <body>
    <?php
    if (!isset($_SESSION['pointcoeur'])) {
    $_SESSION['pointcoeur'] = 3;
    $_SESSION['pointargent'] = 0;
  }
  $valeurréel = 0.75;
  $coeur = "..\Images\coeur.png";

   ?>
      <div class="gridLeft"></div>
      <div class="gridMiddle">
    <table class="center">
<tr>
<td>

<?php if (abs($_POST['estimation']-$valeurréel)>0.10) {$_SESSION['pointcoeur']=$_SESSION['pointcoeur']-1;
};if (abs($_POST['estimation']-$valeurréel)<0.05 && $_SESSION['pointcoeur']<3 ) {$_SESSION['pointcoeur']=$_SESSION['pointcoeur']+1;$_SESSION['pointargent']=$_SESSION['pointargent']+5;
};if (abs($_POST['estimation']-$valeurréel)<=0.10 && abs($_POST['estimation']-$valeurréel)>=0.05 ) {$_SESSION['pointargent']=$_SESSION['pointargent']+1;
};echo "<img src=$coeur height=20>"; echo $_SESSION['pointcoeur'];
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
  <td><div><?php echo $_SESSION['pointargent']; ?></div></td>
  <td> <div>0</div> </td>
  <td></td>
</tr>
<tr>
  <td colspan="2">
    <div id="r-output" id="width: 100%; padding: 25px;">
    <?php
      // Execute the R script within PHP code
      // Generates output as test.png image.
      exec('test_corr.R', $output);
      $corr = substr($output[0], 3, 6);
      echo $corr;
    ?>
    <img src="test.png?var1.1" alt="R Graph"/>
    </div>
  </td>
  <td></td>
    <td></td>
</tr>
<tr>
  <td colspan="2">
    <form  action="menu du jeu.php" method="post">
    <input id="guess"type="submit" name="suivant" value="NEXT">
  </form></td>
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
