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
    $_POST['estimation'] = $_SESSION['estimation'];
    $coeur = "..\Images\coeur.png";

    if (isset($_POST['pseudo'])) {
      $_SESSION['pseudo']=$_POST['pseudo'];
    }
   ?>
  <body>

  </td>
      <div class="gridLeft"></div>
      <div class="gridMiddle">
    <table class="center">
<tr>
<td>

<?php
  if (abs($_POST['estimation']-$_SESSION['corr'])>0.10) {
    $_SESSION['pointcoeur']=$_SESSION['pointcoeur']-1;
  }
  if ($_SESSION['pointcoeur']==3 && abs($_POST['estimation']-$_SESSION['corr'])<0.05) {
    $_SESSION['pointargent']=$_SESSION['pointargent']+5;
  }
  if (abs($_POST['estimation']-$_SESSION['corr'])<0.05 && $_SESSION['pointcoeur']<3 ) {
    $_SESSION['pointcoeur']=$_SESSION['pointcoeur']+1;
    $_SESSION['pointargent']=$_SESSION['pointargent']+5;
  }
  if (abs($_POST['estimation']-$_SESSION['corr'])<=0.10 && abs($_POST['estimation']-$_SESSION['corr'])>=0.05 ) {
    $_SESSION['pointargent']=$_SESSION['pointargent']+1;
  }
echo "<img src=$coeur height=20>"; echo $_SESSION['pointcoeur'];
 ?></td>
<td></td>
<td><div id="high_score">high score: </div>
<td><?php echo $_SESSION['HighScore']; ?></td>
<td><header>
  <aside>
  <a href="MainMenu.php">RETOUR AU MENU</a><div></aside>
</header>
</td>
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

    <img src="test.png?var1.1" alt="R Graph"/>
    </div>
  </td>
  <td></td>
    <td></td>
</tr>
<tr>
  <td colspan="2">
    <form  action="menu du jeu.php" method="post">
    <input id="guess"type="submit" name="suivant" value="RELANCER UNE PARTIE">
  </form></td>
    <td></td>
    <td></td>
</tr>
<tr>
  <td><div>correlation reele</div></td>
  <td><div><?php echo $_SESSION['corr'] ?></div></td>
  <td></td>
</tr>
<tr>
  <td><div>valeur estimee</div></td>
  <td><?php echo $_POST['estimation']?></td>
  <td></td>
</tr>
<tr>
  <td><div>difference</div></td>
  <td><?php echo abs($_POST['estimation']-$_SESSION['corr']) ?></td>
  <td></td>
</tr>
<tr>
   <td><div>nombre de vie gagne simultane</div> </td>
   <td><div><?php if (abs($_POST['estimation']-$_SESSION['corr'])<0.05) {
     $_SESSION['streaks'] = $_SESSION['streaks']+1;
     echo $_SESSION['streaks'];
   }
     else {
      $_SESSION['streaks'] = 0;
      echo $_SESSION['streaks'];
     }
    ?>

</div></td>
   <td></td>
</tr>
<tr>
  <td><div>moyenne des ecarts</div> </td>
  <td><div><?php echo $_SESSION['totalErreur']/$_SESSION['numberOfGames'] ?></div></td>
  <td></td>
</tr>
<tr>
  <td>  <?php if (abs($_POST['estimation']-$_SESSION['corr'])<0.05 ) {echo'<img height="20"src="..\Images\coeur.png" alt="coeur">';echo "+1";echo '<img height="20" src="..\Images\piece.png" alt="piece">';echo "+5";
  } if (abs($_POST['estimation']-$_SESSION['corr'])>0.10 ) {echo'<img height="20"src="..\Images\coeur.png" alt="coeur">';echo "-1";}
      if (abs($_POST['estimation']-$_SESSION['corr'])>=0.05 && abs($_POST['estimation']-$_SESSION['corr'])<=0.10) {echo '<img height="20" src="..\Images\piece.png" alt="piece">';echo "+1";}
        ?></td>
  <td></td>
  <td></td>
</tr>
  </table>
    <div class="gridRight"></div>
    <?php
    if ($_SESSION['pointcoeur']<=1) {
      if(isset($_SESSION['pseudo'])){
        include("connexion.php");
        $mysqli = connectMaBase();
        $points = $_SESSION['pointargent'];
        $pseudo = $_SESSION['pseudo'];
        $requete = "INSERT INTO `parties` (`noPartie`, `score`, `fk_pseudoUser`) VALUES (NULL, '$points', '$pseudo')";
        $result = $mysqli->query($requete);
      }
      unset($_SESSION['pointargent']);
      unset($_SESSION['pointcoeur']);
      unset($_SESSION['streaks']);
      unset($_SESSION['numberOfGames']);
      unset($_SESSION['totalErreur']);
    }

    if (!isset($_SESSION['pointcoeur'])) {
      $_SESSION['pointcoeur'] = 3;
      $_SESSION['pointargent'] = 0;
      $_SESSION['streaks'] = 0;
      $_SESSION['numberOfGames']=0;
      $_SESSION['totalErreur']=0;
  }



   ?>
  </body>
</html>
