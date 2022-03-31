<?php
    require_once("template_header.php");
    require_once("template_menu.php");
?>
<h2> Vous êtes sur la page d'accueil de votre profil iMangerMieux ! </h2>

<br>
<?php
renderMenuToHTML($currentPageId='accueil');
?>


<?php
    require_once("template_footer.php");
?>