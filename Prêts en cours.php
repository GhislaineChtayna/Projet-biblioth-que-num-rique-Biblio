<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Prêts en cours</title>
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
    <li><a href="Prêts en cours.php"Style="background-color: #87CEFA">Prêts en cours</a></li>
    <li><a href="Information du compte.php">>Information du compte</a></li>
    <li><a href="Se déconnecter.php">Se déconnecter</a></li>
        </ul>
    </nav>
    </header>  

    <section>
        <?php
        '<h3> OEUVRES DE VICTOR HUGO : POESIE</h3>';
        ?>
       <!--Image et texte sur le côté Victor Hugo-->
    <div style="display:inline-block;vertical-align:top;">
    <img src="oeuvres-de-Victor-Hugo-Poesie.jpg" alt="oeuvres-de-Victor-Hugo-Poesie" title="Victor Hugo" height="40%" width="40%" />
</div>
<div style="display:inline-block;">
    <p>Auteur: Victor Hugo</p>
    <p>Date de parution: 01/09/2013</p>
    <p>ISBN: 2011865018</p>
    <p>Editeur: Hachette Bnf</p>
    <p>Langue: Français</p>
    <p>Genre: Poétique</p>
    </div>
    <div style="text-align:center;">
        <?php
    '<p><b>Début du prêt : 15/06/2022 - Fin du prêt : 15/07/2022</b></p>';
    ?> 
        <button style="background-color:#00BFFF;border-color:white; color:black"  name="button">Prolongation de la période de prêt</button> <br> 
  <br> 
</div>
</section>
<br>

   <section>
    <?php
        '<h3> RÛMÎ, LE TRESOR CACHE</h3>';
        ?>
       <!--Image et texte sur le côté : Rûmi-->
    <div style="display:inline-block;vertical-align:top;">
    <img src="Rumi-le-tresor-cache.jpg" alt="Rumi-le-tresor-cache" title="Rûmî" height="40%" width="40%" />
</div>
<div style="display:inline-block;">
    <p>Auteur: Shems Friedlander</p>
    <p>Date de parution: 16/05/2018</p>
    <p>ISBN: 2330106491</p>
    <p>Editeur: Actes sud</p>
    <p>Collection: Le Souffle De L'esprit</p>
    <p>Langue: Français</p>
    <p>Genre: Poétique</p>
    </div>
    <div style="text-align:center;">
    <?php
        '<p><b>Début du prêt : 25/07/2022 - Fin du prêt : 15/08/2022</b></p>';
        ?> 
        <button style="background-color:#858a8b; border-color: white; color:black" name="button">Non prolongation de la période de prêt</button> <br> 
  <br> 
</div>
    </section>

</body>
</html>
