<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Modification du compte utilisateur</title>
    <link rel="icon" type="image/jpg" href="livre.jpg"/>
    <link rel="stylesheet" href="Style.CSS">
    </head>

    <body>
    <header> 
<nav>  
    <ul>
<li><img src="Biblio-logo.jpg" alt="Biblio" width="8%" height="8%"/></li>
<li><a href="Parcourir la bibliothéque.php">Parcourir la bibliothéque</a></li>
<li><a href="Prêts en cours.php">Prêts en cours</a></li>
<li><a href="Information du compte.php"Style="background-color: #87CEFA">>Information du compte</a></li>
<li><a href="Se déconnecter.php">Se déconnecter</a></li>
    </ul>
</nav>
</header>  
<!--Formulaire d'inscription-->
<form> 
   <!--Fieldset pour l'encadrement-->
  <fieldset>
    <legend>Modification du compte utilisateur</legend>
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

<input type="submit" id='submit' value="Valider la modification"/>
</fieldset>
<?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Information incorrecte</p>";
                }
                ?>
</form>
</body>
</html>
