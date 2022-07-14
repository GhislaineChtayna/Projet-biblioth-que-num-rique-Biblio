<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Biblio2</title>
    <link rel="icon" type="image/jpg" href="livre.jpg"/>
    <link rel="stylesheet" href="Style.CSS">
    </head>

    <body>
             <!--En tête de la page-->
  <header> 
    <nav>  
        <ul>
    <li><img src="Biblio-logo.jpg" alt="Biblio" width="8%" height="8%"/></li>
    <li><a href="Parcourir la bibliothéque.php"Style="background-color: #87CEFA">Parcourir la bibliothéque</a></li>
    <li><a href="Prêts en cours.php">Prêts en cours</a></li>
    <li><a href="Information du compte.php">>Information du compte</a></li>
    <li><a href="Se déconnecter.php">Se déconnecter</a></li>
        </ul>
    </nav>
    </header> 
    <!--Les barres de recherche--> 
    <div class="box">
        <h2> Recherche: </h2>
        <form><input type="text" name="" placeholder="Titre">
        <form><input type="text" name="" placeholder="Auteur">

    <!--Liste déroulante pour genre-->
    <select name="Genre" nom="genre" required>
        <option> value="nomGenre">Genre</option>
        <option> value="nomNarratif">Narratif</option>
        <option> value="nomThéâtral">Théâtral</option>
        <option> value="nomPoétique">Poétique</option>
        <option> value="nomArgumentatif">Argumentatif</option>
        <option> value="nomEpistolaire">Epistolaire</option>
    </select>

    <!--Liste déroulante pour les langues-->
    <select name="Langue" nom="langue" required>
        <option> value="nomLangue">Langue</option>
        <option> value="nomFrançais">Français</option>
        <option> value="nomAnglais">Anglais</option>
        <option> value="nomMandarin">Mandarin</option>
        <option> value="nomEspagnol">Espagnol</option>
        <option> value="nomRusse">Russe</option>
        <option> value="nomHindi">Hindi</option>
        <option> value="nomHébreu">Hébreu</option>
        <option> value="nomArabe">Arabe</option>
    </select>
        <input type="submit" name="" value="Lancer la recherche">

<section>
    <h2> Résultat</h2>
    <?php
    echo '<h3>Explorer le monde floral</h3>'
    ?>
       <!--Image et texte sur le côté-->
    <div style="display:inline-block;vertical-align:top;">
    <img src="Fleurs.jpg" alt="Fleurs" title="Fleurs" height="40%" width="40%" />
</div>
<div style="display:inline-block;">
    <p>Auteur: Phaidon</p>
    <p>Date de parution: 08/10/2020</p>
    <p>ISBN: 1838661751</p>
    <p>Editeur: Phaidon</p>
    <p>Langue: Français</p>
    <p>Genre:  </p>
    </div>

   <h5>Présentation</h5>
    <p>Un tour d'horizon captivant célébrant la beauté des fleurs dans l'art, l'histoire et la culture. Réunissant plus de 300 illustrations spectaculaires, Fleurs : explorer le monde floral invite le lecteur à un fabuleux voyage à travers les continents et les cultures pour découvrir les innombrables façons dont les artistes de tous horizons ont interprété les fleurs durant 4000 ans, de l'Egypte antique à nos jours. Présentant la diversité des fleurs dans le monde entier, les oeuvres couvrent un large éventail de styles et de techniques, des natures mortes et illustrations botaniques aux sculptures, des créations de mode aux compositions florales. Réalisée avec soin par des spécialistes internationaux, cette sélection d'images est organisée pour mettre en lumière les contrastes et les ressemblances. Ce magnifique ouvrage présente les oeuvres emblématiques de nombreux artistes, dont Nobuyoshi Araki, Cecil Beaton, Léonard de Vinci, David Hockney, Nick Knight, Yayoi Kusama, Robert Mapplethorpe, Henri Matisse, Alexander McQueen, Claude Monet, William Morris, Georgia O'Keeffe, Pierre-Joseph Redouté, Rachel Ruysch, Constance Spry et Flora Starkey.</p>
</section>

<section>
    <h4>...</h4>
</section>
        </form>
    </div>

</body>
</html>
