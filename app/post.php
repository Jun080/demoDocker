<?php
session_start();

//connexion à la base de données
$bdd = new PDO("mysql:host=database;dbname=post", "root", "password");

if(isset($_POST['deconnexion'])) {
    header('location: inscription.php');
}

$recMess = $bdd->query('SELECT * FROM message');
while($chat = $recMess->fetch()){
    echo ("<strong>" . $chat['id_utilisateur']."</strong>" . ': ' . $chat['message'] ."<br>");
}

//envoyer les messages

if(isset($_POST['envoyer'])){
    if(!empty($_POST['message'])){
        $message = nl2br(htmlspecialchars($_POST['message']));
        $pseudo = $_SESSION['pseudo'];

        $insert = $bdd->prepare('INSERT INTO message(message, id_utilisateur) VALUES(?, ?)');
        $insert->execute(array($message, $pseudo));
        echo ("<strong>" . $pseudo."</strong>" . ': ' . $message ."<br>");

    }else{
        echo "écrivez votre message ";
    }



}

//revenir à l'écran connexion/inscription

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST" action="" >
    <textarea name="message" placeholder="message"></textarea><br>

    <input type="submit" value="envoyer" name="envoyer"/>
    <input type="submit" value="deconnexion" name="deconnexion"/>
</form>

</form>
</body>
</html>