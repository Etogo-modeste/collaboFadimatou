<?PHP
function Connect()
{
    $db = "mysql:dbname = ;host = localhost";
    $user = "root";
    $password = "";

    try {
        $bdd = new PDO($db, $user, $password);
    } catch (PDOException $e) {
        echo "erreure de connexion à la base de donnée !" . $e->getMessage();
    }
    return $bdd;
}
