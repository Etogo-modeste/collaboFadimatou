<?php
require_once('connect.inc.php');
?>
<!DOCTYPE html>
<html lang="fr" id="tout">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/connexion.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script language="javascript" src="Js/connexion.js"></script>
        <script src="profil.js"></script>
        <title>Connexion</title>
    </head>
    <body id="body">
        <form action="#" method="post">
            <div id="connexion">
                <!-- <div id="profil"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>Photo de profil</label> <br><br>
                    <img src="C:/photo1.png" id="photo">
                    <input type="file" id="file">
                    <label for="file" id="choose">Choisir une photo de profil</label>
                </div> -->
                <!-- <img src="https://lorempixel.com/100/100" id="image">
                <input type="file" id="profile" name="profile_photo" placeholder="photo" required="capture"> -->
                <div id="info"><br> <br><br>
                    <input type="text" name="Société" placeholder="Nom de la sociéte" id="societe"> <br>
                    <input type="text" name="Nom d'utilisateur" placeholder="Nom d'utilisateur ou Matricule" id="user"> <br> <br>
                    <input type="password" name="Mot de passe" placeholder="Mot de passe" id="password"> <br><br> <br>
                    <button id="bt" onclick="connexion()" onclick="index()">Connexion</button><br><br><br><br><br><br><br>
                    <label for="text" id="text">Vous n'avez pas de compte ? </label>
                    <a href="compte.html" id="link">Créez-en un compte</a>
                </div>
            </div>
        </form>
    </body>
</html>