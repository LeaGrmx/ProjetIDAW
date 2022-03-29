<?php
    require_once("template_header.php");
    require_once("template_menu.php");
?>
<h2> Vous êtes sur la page dédiée à votre profil </h2>
<body>
<?php
renderMenuToHTML($currentPageId='profil');
?>
<p> Si vous souhaitez le modifier vous pouvez <a href="">cliquer ici</a>.</p>
</body>


<?php
    require_once("template_footer.php");
?>