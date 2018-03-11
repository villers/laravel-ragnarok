<?php
    session_start();
    $bdd = new PDO('mysql:host=46.105.55.202;port=3306;dbname=nico_projetbdd;charset=utf8', 'nkhouadmin', 'Vl_a4w33');
    
    if (isset($_POST['submit'])) {
        $login = $_POST['login'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        $genre = $_POST['genre'];
        $born = $_POST['born'];
        $phone = $_POST['telephone'];

        $query = $bdd->prepare('SELECT * FROM login WHERE login = ?');
        $query->execute([$login]);
        $loginexist = $query->rowCount();
        $query2 = $bdd->prepare('SELECT * FROM login WHERE email = ?');
        $query2->execute([$email]);
        $emailexist = $query2->rowCount();

        if ($loginexist === 0 && $emailexist === 0) {
            if ($password1 == $password2) {
                $queryInsert = $bdd->prepare('INSERT INTO login (login, mdp, nom, prenom, genre, email, date_de_naissance, telephone) VALUES(?,?,?,?,?,?,?,?)');
                if ($queryInsert->execute([$login, $password1, $nom, $prenom, $genre, $email, $born, $phone])) {
                    $error = 'Inscription réussie !';
                //var_dump($_SESSION);
                } else {
                    $error = 'L\'inscription n\'a pas fonctionné à cause d\'une erreur interne';
                }
            } else {
                $error = 'Les mots de passe ne correspondent pas';
            }
        } else {
            $error = 'Login ou email déjà utilisé';
        }
    }
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
    <style>
        * {
            font-family: 'Lato', sans-serif;
        }
        body {
            background-image: url('images/background.jpg');
            background-size: cover;
        }

        .well {
            background-color: rgba(127,198,204,0.7);
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content:center;
            align-items: center;
        }
    </style>
    <div class="container">
        <div class="col-md-5">
            <div class="well">
                <h1 style="text-align: center; color: #eee">Inscription</h1> <br/>
                <form id="incription-form" action="" method="post">
                    <input type="text" name="login" placeholder="Login" class="form-control"> <br>
                    <input type="text" name="prenom" placeholder="Prenom" class="form-control"> <br>
                    <input type="text" name="nom" placeholder="Nom" class="form-control"> <br>
                    <input type="email" name="email" placeholder="Mail" class="form-control"> <br>
                    <input type="password" name="password1" placeholder="Mot de passe" class="form-control"> <br>
                    <input type="password" name="password2" placeholder="Confirmer mot de passe" class="form-control"> <br/>
                    <input type="number" name="telephone" placeholder="Téléphone (sans espace)" class="form-control"> <br>
                    <input type="date" name="born" placeholder="Date de naissance" class="form-control"> <br/>
                    <input type="radio" name="genre" value="S" checked>Ne pas spécifier <br/>
                    <input type="radio" name="genre" value="M" >Homme <br/>
                    <input type="radio" name="genre" value="F" >Femme <br/><br/>
                    <input type="submit" value="S'inscrire" class="btn btn-primary" name="submit">
                </form>
				<?php 
                if (isset($error)) {
                    //var_dump($_SESSION);
                    echo $error;
                    //$error = NULL;
                }
                ?>
            </div>
        </div>
    </div>
    </body>
    </html>