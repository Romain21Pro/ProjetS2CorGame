<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="..\CSS\style menu jeu.css"/>
  </head>
  <body>
      <div class="gridLeft"></div>
      <div class="gridMiddle">
    <table class="center">
<tr>
<td><img name="coeur1" height="20"src="..\Images\coeur.png" alt="coeur"><img name="coeur2" height="20"src="..\Images\coeur.png" alt="coeur"><img name="coeur3" height="20"src="..\Images\coeur.png" alt="coeur"></td>
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
  <td><div>0</div></td>
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
  <td><div>streaks</div> </td>
  <td><div>0</div></td>
  <td></td>
</tr>
<tr>
  <td><div>mean error</div> </td>
  <td><div>_</div></td>
  <td></td>
</tr>
  </table>
    <div class="gridRight"></div>
  </body>
</html>
