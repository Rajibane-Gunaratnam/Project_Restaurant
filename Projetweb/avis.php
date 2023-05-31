<?php
$titre = "Crêpes Chaudes - Avis";
require("debut.php");

session_start();

if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];
    $codeco = "<li><a href='deconnexion.php'>Déconnexion</a></li>";
    
}else{
    $codeco = "<li><a href='connexion.php' id='connexion'>Connexion</a></li>";
}

?>
<div class="sidebar">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="apropos.php">A Propos</a></li>
        <li><a href="avis.php">Avis</a></li>
        <?php echo $codeco; ?>
    </ul>
</div>
<div class="contenu">
    <form action="insertionavis.php" method="post">
    Note :
    <input type="number" name="note" min="0" max="5"><br><br>
    Avis :
    <textarea name="critique" id="critique" rows="5"></textarea><br><br>
    <button type="submit" name="envoyer">Envoyer !</button> 
  </form> 
    </form>
</div>
<?php
require("fin.html");
?>