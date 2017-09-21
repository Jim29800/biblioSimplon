<?php
    $response = $bdd->query("Select * from art_article, gnr_genre where art_gnr_oid = gnr_oid");
    $data=$response->fetchAll();
    
?>


<table class='table'>
    <thead>
    <tr>
        <th>
            Titre
        </th>
        <th>
            Auteur
        </th>
        <th>
            Genre
        </th>
        <th>
           Extrait
        </th>
        <th>
            Date
        </th>
        <th>
            Consult
        </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $values): ?>
        <tr>
            <td><?= $values['art_titre'] ?></td>
            <td><?= $values['art_auteur'] ?></td>
            <td><?= $values['gnr_libele'] ?></td>
            <td><?= substr($values['art_content'],0,70)."..." ?></td>
            <td><?= $values['art_date'] ?></td>
            <td><?= '<a href="?p=article&id='.$values['art_oid'].'"><i class="glyphicon glyphicon-search"></i></a>' ?>
                 <?php
                    if(isset($_SESSION['login'])){
                        echo '<a href="?p=modif&id='.$values['art_oid'].'"><i class="glyphicon glyphicon-wrench"></i></a>'; 
                    }
                 ?>               
            </td> 
        </tr>
                <?php endforeach; ?>
    </tbody>   
</table>
