<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/compte.css">
        <script language="javascript" src="css/compte.css"></script>
        <title>Creation de compte</title>
    </head>
    <body>
        <div id="compte">
            <img src="https://lorempixel.com/100/100" id="image">
            <input type="file" id="profile" name="profile_photo" placeholder="photo" required="capture" > <br>
            <input type="text" id="name1" placeholder="Nom">
            <input type="text" id="prenom" placeholder="Prénom"> <br> <br>
            <input type="email" id="email" placeholder="E-mail"> <br> <br>
            <input type="text" id="entreprise" placeholder="Nom de la société"> <br> <br>
            <input type="text" id="name_user" placeholder="Nom d'utilisateur"> <br> <br>
            <input type="text" id="matricule" placeholder="Matricule"> <br> <br>
            <input type="password" id="password" placeholder="Mot de Passe"> <br> <br>
            <label for="text" id="warning">********Remplissez tous les champs********</label> <br><br>
            <button id="valider" onclick="valider()">Valider</button>
            <button id="annuler" onclick="annuler()">Annuler</button>
        </div>

    </body>
</html>