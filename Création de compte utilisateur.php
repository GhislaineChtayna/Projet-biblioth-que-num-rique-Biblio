<?php
include ('bddconnect.php');
include ('registersubmit.php');
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Création de compte utilisateur</title>
    <link rel="icon" type="image/jpg" href="livre.jpg"/>
    <link rel="stylesheet" href="Style.CSS">
    </head>

    <body>
    <header> 
<nav>  
    <ul>
<li><img src="Biblio-logo.jpg" alt="Biblio" width="8%" height="8%"/></li>
<li><a href="Parcourir la bibliothéque.php">Parcourir la bibliothéque</a></li>
<li><a href="Se connecter.php">Se connecter</a></li>
<li><a href="Création de compte utilisateur.php"Style="background-color: #87CEFA">>Créer un compte</a></li>
    </ul>
</nav>
</header>  
<!--Formulaire d'inscription-->
<form> 
   <!--Fieldset pour l'encadrement-->
  <fieldset>
    <legend>Création du compte utilisateur</legend>
<label> Nom</label>
<input type="text" placeholder="Nom" name="username" required>
<br>

<label> Prénom</label><input type="text" placeholder="Prénom"/><br>

<label> E-mail</label>
<input type="email" placeholder="E-mail" name="email" required>
<br>

<label> Nouveau mot de passe</label><input type="password" placeholder="Nouveau mot de passe" name=password required>
<br>
<label> Confirmation mot de passe</label><input type="password" placeholder="Confirmation mot de passe"/><br>

<input type="submit" id='submit' value="Valider"/>
</fieldset>
<p><?php if (isset($msg)) {echo $msg;} ?></p>

</form>
</body>
</html>