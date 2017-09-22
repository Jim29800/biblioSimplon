<?php
//Traitement PHP
if(!empty($_POST)):
    $titre = htmlspecialchars($_POST['titre']);
    $genre = htmlspecialchars($_POST['genre']);
    $contenu = htmlspecialchars($_POST['contenu']);
    $auteur = htmlspecialchars($_POST['auteur']);
    $date = htmlspecialchars($_POST['date']);
    $sql_ajout_article = sprintf("INSERT INTO art_article (art_titre,art_content,art_auteur,art_date)VALUES 
                                '%s','%s','%s','%s'", $titre, $contenu, $auteur, $date);


endif;
    // art_titre varchar(50),
	// art_content text,
	// art_auteur varchar(50),
    // art_date varchar(20),
        $sql_genre = $bdd->query(sprintf("SELECT * FROM gnr_genre"));
?>
<!-- Affichage HTML -->
<form action="" method="post" class="text-center">
<ul class="list-unstyled">
    <li><input type="submit" value="Créer l'article"></li><br/>
    <li class="form-inline">
        <div class="form-group">
            <input type="text" name="titre" id="titre" placeholder="Titre">
            <input type="text" name="auteur" id="auteur" placeholder="Auteur">
            <select name="genre" id="genre" class="form-control">
                <optgroup label="Genre" >
                    <?php foreach ($sql_genre as $key => $value) :?>
                        <option val= <?= $value["gnr_oid"] ?>> <?= $value["gnr_libele"] ?> </option>
                    <?php endforeach ?>
                </optgroup>
            </select>
            <input type="date" name="" id="" placeholder="">
        </div>
    </li><br/>
    <li><textarea name="" id="" cols="100" rows="30"></textarea></li>
</ul>
</form>