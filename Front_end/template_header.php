<!DOCTYPE html>
<html>
    <head>
        <title>Mon profil iMangerMieux</title>
            <link rel="stylesheet" href="sb-admin-2.css" type="text/css"
                media="screen" title="default" charset="utf-8"/>
            <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    </head>
<?php
    session_start();
    if (isset($_SESSION['login'])){
        echo "<p> Vous êtes connecté en tant que : ".$_SESSION['login'];
    }    
?>
