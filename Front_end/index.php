<!DOCTYPE html>
<html>
    <head>
        <title> Mon profil iMangerMieux </title>
    </head>
    <body>
    <p>Bonjour ! Nous sommes le :
        <?php
        // Affichage de la date
        echo date("d/m/Y");?> </p>
    <p> Il est : 
    <?php
        // Affichage de l'heure'
        echo date("H:i");
    ?> </p>

    <form id="login_form" action="accueil.php" method="POST">
        <table> 
            <tr>
                <th>Login :</th>
                <td><input type="text" name="login"></td>
            </tr> 
            <tr>
                <th>Mot de passe :</th>
                <td><input type="password" name="password"></td>
            </tr> 
            <tr>
                <th></th>
                <td><input type="submit" value="Se connecter..." /></td>
            </tr>
        </table>
    </form>

    </body>

</html>