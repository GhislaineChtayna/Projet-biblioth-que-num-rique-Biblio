<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Modification du compte utilisateur</title>
    <link rel="icon" type="image/jpg" href="livre.jpg"/>
    <link rel="stylesheet" href="Style.CSS">
    </head>

    <body>
        <!--En tête de la page-->
  <header> 
<nav>  
    <ul>
<li><img src="Biblio-logo.jpg" alt="Biblio" width="8%" height="8%"/></li>
<li><a href="Parcourir la bibliothéque.php">Parcourir la bibliothéque</a></li>
<li><a href="Prêts en cours.php">Prêts en cours</a></li>
<li><a href="Information du compte.php"Style="background-color: #87CEFA">Information du compte</a></li>
<li><a href="Se déconnecter.php">Se déconnecter</a></li>
    </ul>
</nav>
  </header>  
  <!--Formulaire d'inscription-->
  <form> 
     <!--Fieldset pour l'encadrement-->
    <fieldset>
      <legend>Information du compte utilisateur</legend>
<label> Nom</label><input type="text" name="Nom" value="Studi"/><br>
<label> Prénom</label><input type="text" name="Prénom" value="Etudiant"/><br>
<label> E-mail</label><input type="email" name="E-mail" value="etudiantstudi@gmail.com"/><br>
<input type="submit" value="Valider"/>
</fieldset>
</form>
</body>
</html>
