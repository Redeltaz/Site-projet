<p class="pseudo">@<?php echo $valeur['pseudo']; ?></p>
<p class="txt">-"<?php echo $valeur['texte']; ?>"</p>
<?php if($valeur['img'] !== ""){?> <!-- si la ligne de la table possede une image alors on l affiche -->
    <img src="../img/<?php echo $valeur['img'] ?>" class="image" alt="image : <?php echo $valeur['img'] ?>">
<?php } ?>
<p class="date"><?php echo $valeur['date']; ?></p>