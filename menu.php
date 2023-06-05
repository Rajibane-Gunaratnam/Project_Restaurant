<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>CARTE</title>
    <link rel="stylesheet" type="text/css" href="crepeschaude.css">
    <script src="myscript.js"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            
            <a href="#" class = "logo"> Crêpes Chaudes</a>

            <div class="nav-links">

                <ul>
                    <li class = "Acceuil" class = "active"><a href="index.php">Acceuil</a></li>
                    <li><a href="menu.php">Carte</a></li>
                    <li><a href="apropos.php">A propos</a></li>
                    <li><a href="avis.php">Avis</a></li>
                    <li><a href="connexion.php">Sign-up</a></li>
                    <li><a href="connexion.php">login</a></li>
                </ul>
            </div>

            <img src="menu-btn.png" alt="menu Hamburger" class = "menu-hamburger">

        </nav>
    </header>
    <main>
            <img src="logo.png" alt="" class= "logo-restaurant">
            <section class="annonce_menu">
                <div class="titre_anonoce_menu">
                        <h1> NOS <br> MENUS</h1>
                </div>

            </section>
    </main>
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger")
        const navLinks = document.querySelector(".nav-links")

        menuHamburger.addEventListener('click', ()=> {
        navLinks.classList.toggle("mobile-menu")
    })
    </script>
<?php
require("fin.html");
?>