<p class="nom">Vous allez poster en tant que : <?php echo $_SESSION['membre']['pseudo'];?></p> <!-- on recupere le pseudo de la perosnne connecte pour le prevenir -->
<br>
<br>
<br>
<textarea class="text ckeditor" name="texte" placeholder="Ecrivez le contenu de votre article"></textarea>
<br>
<p class="img">Ajouter une image : </p>
<br>

<input type="file" name="fichier" id="fileToUpload">
<input type="submit" value="Poster !" name="submit" class="add">

