<?php
$titre = "Crêpes Chaudes - Connexion";
require("debut.php");
?>
<div>
    <h1>Connectez-vous</h1>
    <form action="connexion.php" method="post">
        <input type="text" name="username" placeholder="Nom d'utilisateur"> <br>
        <input type="password" name="passwd" placeholder="Mot de Passe"><br>
        <input type="submit" value="Se connecter">
    </form>
    <p>Pas encore inscrit? <a href="inscription.php">Incrivez-vous !</a></p>
</div>

</body>
</html>