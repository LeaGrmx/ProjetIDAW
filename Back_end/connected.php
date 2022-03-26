<?php

    require_once("database.php");

    $query_login = "SELECT USER_LOGIN FROM UTILISATEUR";
    $result_login = mysqli_query($mysqli, $query_login);
    $query_mdp = "SELECT Mdp FROM UTILISATEUR";
    $result_mdp = mysqli_query($mysqli, $query_mdp);
    
    if($result_login and $result_mdp){
        $login = $result_login->fetch_all();
        $mdp = $result_mdp->fetch_all();
        print_r($login);
        print_r($mdp);
        /* print($login[6][0]);
        print($mdp[6][0]); */
        $users= array();
        for ($i=0;$i<count($login);$i++){
            $users[$login[i][0]] => $mdp[i][0];
        }
        print_r($users);
        //echo json_encode($all);
    }
    

    /* // on simule une base de données
    $users = array(
    // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi' );

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;

    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];

        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            $login = $tryLogin;
        } else
            $errorText = "Erreur de login/password";
    } 
    else
        $errorText = "Merci d'utiliser le formulaire de login";
    
    if(!$successfullyLogged) {
        echo $errorText;
        echo "<nav class=\"menu\"><ul><li><a href=\"login.php\">Lien vers le formulaire de login</a></li></ul></nav>";
    } else {
        echo "<h1>Bienvenue ".$login."</h1>";
        session_start();
        $_SESSION['newsession']=$login;
        echo "Le login de la session en cours est :".$_SESSION['newsession']."<br>" ;
        echo "<nav class=\"menu\"><ul><li><a href=\"index.php\">Lien vers l'index</a></li></ul></nav>";
    }   
?> */