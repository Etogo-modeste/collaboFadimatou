<!DOCTYPE html>
<html>

<head>
    <title>Administrateur</title>
    <meta charset="utf-8">
    <meta
        description="page admin, toute personne y accedant pourra apporter des modifications au sein de notre application.">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/admin.css">
    <script language="javascript" scr=""></script>
</head>

<body>
                <button onclick="" id="b1">Retour</button>
                <button onclick="" id="b2">Deconnexion</button><br><br>
    <div id="container">
        <div class="welcome">
            <h1>welcome to admin box<span>.</span></h1><br><br>
        </div>
        <div class="body">
                <div class="trait"></div>
            <br><br>
                <h1><Strong>listes des interventions</Strong>   <button onclick="" id="b3">+Ajouter</button></h1>
                <form action="" method="POST">
                    <input type="submit" value="rechercher">
                    <input type="search" name="search" placeholder="saisiser votre requete">
                    
                </form><br>
                <div class="tableau">
                    <table>
                        <thead>
                            <tr>
                                <th>interventions</th>
                                <th>Descriptions</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>intervention 1</td>
                                <td>description 1</td>
                                <td>
                                    <a href="">afficher</a>
                                    <a href="">modifier</a>
                                    <a href="">supprimer</a>
                                </td>
                            </tr>
                            <tr>
                                <td>intervention 2</td>
                                <td>description 2</td>
                                <td>
                                    <a href="">afficher</a>
                                    <a href="">modifier</a>
                                    <a href="">supprimer</a>
                                </td>
                            </tr>
                            <tr>
                                <td>intervention 3</td>
                                <td>description 3</td>
                                <td>
                                    <a href="">afficher</a>
                                    <a href="">modifier</a>
                                    <a href="">supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</body>

</html>