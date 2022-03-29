<?php

function renderMenuToHTML($currentPageId) {
// un tableau qui definit la structure du site
        $mymenu = array( // idPage titre
            'accueil' => 'Accueil',
            'journal' => 'Journal',
            'aliments' => 'Aliments',
            'profil' => 'Profil'
        );
        
        echo "<nav class=\"menu\"><ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li><a ";
    
            if($currentPageId == $pageId)
                echo "id=\"currentpage\" ";
            
            echo "href=\"".$pageId.".php\">".$pageParameters."</a></li> \n";

        }
        echo "</ul></nav>";
}

?>