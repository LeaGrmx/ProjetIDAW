<?php
    require_once("template_header.php");
    require_once("template_menu.php");
?>

<h2> Mes aliments </h2>

<?php
    renderMenuToHTML($currentPageId='aliments');
?>
<body>
<p> Sur cette page, vous avez accès à la base de données de vos aliments. Celle-ci contient à la fois ceux que nous avons fournis et ceux que vous avez ajoutés. </p>

</body>
<?php
    require_once("template_footer.php");
?>