<?php 
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['mail'];
    $password = $_POST['passwd'];
    $username = $_POST['username'];
    
    $connexion = mysqli_connect ("localhost", "root", "", "crepeschaudes");
        $hashpasswd = password_hash($password, PASSWORD_DEFAULT);
        $requete = "INSERT INTO user(username,passwd,email,nom,prenom) VALUES ('$username','$hashpasswd','$email', '$nom','$prenom')";
        $insertion = mysqli_query($connexion, $requete);
        if ($insertion == true){
          echo "C'est enregistré!";
          header("Location: connexion.php");
          exit;
        } else{
          echo "Votre compte n'a pas pu être enregistré.";
        }
      
  ?>