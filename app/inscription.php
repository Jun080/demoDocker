<?php
session_start();
//connexion à la base de données
$bdd = new PDO("mysql:host=database;dbname=data", "root", "password");

//inscription
if(isset($_POST['envoyer'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['password']) AND !empty($_POST['last_name'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $password = htmlspecialchars($_POST['password']);

        $insert = $bdd->prepare('INSERT INTO utilisateur(pseudo, last_name, password) VALUES(?, ?, ?)');
        $insert->execute(array($pseudo, $last_name, $password));

        $rec = $bdd->prepare('SELECT * FROM utilisateur WHERE pseudo = ? AND password = ?');
        $rec->execute(array($pseudo, $password));

        if($rec->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $rec->fetch()['id'];

        }


    }else{
        echo "complétez tous les champs pour vous inscrire";
    }
}

//connexion
if(isset($_POST['connexion'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);

        $rec = $bdd->prepare('SELECT * FROM utilisateur WHERE pseudo = ? AND password = ?');
        $rec->execute(array($pseudo, $password));

        if($rec->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $rec->fetch()['id'];
            header('location: post.php');
        }

    }else{
        echo "complétez tous les champs pour vous connnecter";
    }
}

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
    <h1>Inscription</h1>
    <form method="POST" action="" >
        <input type="text" name="pseudo" placeholder="pseudo"><br>
        <input type="text" name="last_name" placeholder="last_name"><br>
        <input type="password" name="password" placeholder="password"><br>

        <input type="submit" value="envoyer"/>
    </form>

    <h1>Connexion</h1>
    <form method="POST" action="" >
        <input type="text" name="pseudo" placeholder="pseudo"><br>
        <input type="password" name="password" placeholder="password"><br>

        <input type="submit" value="connexion" name="connexion"/>
    </form>
</body>
</html>