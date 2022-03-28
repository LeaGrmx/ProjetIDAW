<?php
    session_start();
    if(!isset($_SESSION['pseudo'])){
        
        require_once('database.php');

        $login = "anonymous";
        $errorText = "";
        $successfullyLogged = false;
        if(isset($_POST['login']) && isset($_POST['password'])) {
            $tryLogin=$_POST['login'];
            $tryPwd=$_POST['password'];

            $tryLogin = mysqli_real_escape_string($mysqli,$tryLogin);
            $result = mysqli_query($mysqli,"SELECT USER_LOGIN, Mdp FROM UTILISATEUR WHERE USER_LOGIN='$tryLogin'");
            if($result == 'false')
                die('échec de la query');
            $result = $result->fetch_all();

            // si login existe et password correspond
            if( !empty($result) && $tryPwd == $result[0][1] ) {
                $successfullyLogged = true;
                $login = $result[0][0];
            } else
                $errorText = "Erreur de login/mot de passe";
        } else
            $errorText = "Merci d'utiliser le formulaire de login";
        if(!$successfullyLogged) {
            echo $errorText;
            echo "<br><a href=\"../Front_end/index.php\">Retour à la page de connexion</a>";
        } else {
            echo "<h1>Bienvenue ".$login."</h1>";
            $_SESSION['login'] = $login;
            header('Location: ../Front_end/accueil.php');
        }
    } else {
        $login = $_SESSION['login'];
        echo "<h1>Bienvenue ".$login." </h1>";
        header('Location: ../Front_end/accueil.php');
    }
?>
    

