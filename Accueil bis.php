<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Biblio2</title>
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
    <li><a href="Information du compte.php">Information du compte</a></li>
    <li><a href="Se déconnecter.php">Se déconnecter</a></li>
        </ul>
    </nav>
      </header>
      <?php
      echo '<h1>Bienvenue sur Biblio, le site de la <br> bibliothéque de Pontault-Combault. </h1>';
      ?>

    <?php
    echo date("d/m/Y"); // Affiche la date du jour
    echo "Il est " . date("H:i:s") ; // Affiche l'heure
    ?>
</body>
</html>
