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
<td><?php echo "<img src=$coeur height=20>"; ?></td>
<td></td>
<td><div id="high_score">record</div>
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
  <td>  <img height="20" src="..\Images\piece.png" alt="piece"><br>
  </td>
  <td><div><?php echo "$pointargent"; ?></div></td>
  <td> <div>0</div> </td>
  <td></td>
</tr>
<tr>
  <td> <div id="valeur">0.71</div> </td>
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
<tr>
  <td><div>serie</div> </td>
  <td><div>0</div></td>
  <td></td>
</tr>
<tr>
  <td><div>erreur moyenne</div> </td>
  <td><div>_</div></td>
  <td></td>
</tr>
  </table>
    <div class="gridRight"></div>
  </body>
</html>
