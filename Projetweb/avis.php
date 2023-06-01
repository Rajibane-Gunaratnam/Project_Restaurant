<?php
$titre = "Crêpes Chaudes - Avis";
require("debut.php");

session_start();

if(!isset($_SESSION['username'])){   
    $codeco = "<li><a href='connexion.php' id='connexion'>Connexion</a></li>";
}else{
    $codeco = "<li><a href='deconnexion.php'>Déconnexion</a></li>";
    $user = $_SESSION['username'];
}


    
if($_SERVER['REQUEST_METHOD'] === 'POST'){  
    $note= $_POST['note'];
    $critique = $_POST['critique'];
    $datec = date("d:m:y");
    
    $connexion = mysqli_connect ("localhost", "root", "", "crepeschaudes");
        
    $critique = mysqli_real_escape_string($connexion, $critique);
    $user = mysqli_real_escape_string($connexion, $user);

    $requete = "INSERT INTO avis(username,note,datec,critique) VALUES ('$user','$note', '$datec','$critique')";
    $insertion = mysqli_query($connexion, $requete);
    if ($insertion == true){
        echo "C'est enregistré!";
    } else{
        echo "Votre avis n'a pas pu être enregistré." . mysqli_error($connexion);
    }

    mysqli_close($connexion);
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
    <form action="avis.php" method="post">
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