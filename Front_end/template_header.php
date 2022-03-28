<!DOCTYPE html>
<html>
    <head>
        <title>Mon profil iMangerMieux</title>
            <link rel="stylesheet" href="" type="text/css"
                media="screen" title="default" charset="utf-8"/>
    </head>
<?php
    session_start();
    if (isset($_SESSION['login'])){
        echo "<p> Vous êtes connecté en tant que : ".$_SESSION['login'];
    }    
?>
