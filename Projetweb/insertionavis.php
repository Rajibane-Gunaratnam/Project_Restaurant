<?php 
    session_start();
    if(isset($_SESSION['username'])){
      $user = $_SESSION['username'];
  }
    $note= $_POST['note'];
    $critique = $_POST['critique'];
    $datec = date("d:m:y");
    
    $connexion = mysqli_connect ("localhost", "root", "", "crepeschaudes");
        
        $requete = "INSERT INTO avis(username,note,datec,critique) VALUES ('$user','$note', '$datec','$critique')";
        $insertion = mysqli_query($connexion, $requete);
        if ($insertion == true){
          echo "C'est enregistré!";
        } else{
          echo "Votre avis n'a pas pu être enregistré.";
        }
      
  ?>