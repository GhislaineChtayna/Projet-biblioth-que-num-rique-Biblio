<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Se connecter</title>
    <link rel="icon" type="image/jpg" href="livre.jpg"/>
    <link rel="stylesheet" href="Style.CSS">
    </head>

    <body>
    <header> 
      <nav>  
          <ul>
      <li><img src="Biblio-logo.jpg" alt="Biblio" width="8%" height="8%"/></li>
      <li><a href="Parcourir la bibliothéque.php">Parcourir la bibliothéque</a></li>
      <li><a href="Se connecter.php"Style="background-color: #87CEFA">Se connecter</a></li>
      <li><a href="Créer un compte.php">Créer un compte</a></li>
          </ul>
      </nav>
        </header>  

        <form> 
     <!--Fieldset pour l'encadrement-->
    <fieldset>
      <legend>Connexion</legend>
<label> E-mail</label><input type="email" placeholder="E-mail" name="email" required><br>
<label> Mot de passe</label><input type="password" placeholder="Mot de passe" name="password" required><br>

<input type="submit" value="Valider"/>
</fieldset>
<?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
</form>
</body>
</html>
