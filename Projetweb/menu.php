<?php
$titre = "Crêpes Chaudes - Menu";
require("debut.php");
session_start();

if(!isset($_SESSION['username'])){   
    $codeco = "<li><a href='connexion.php' id='connexion'>Connexion</a></li>";
}else{
    $codeco = "<li><a href='deconnexion.php'>Déconnexion</a></li>";
    $user = $_SESSION['username'];
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
<?php
require("fin.html");
?>