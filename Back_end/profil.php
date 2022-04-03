<?php
    
    require_once("database.php");
?>
    <script>
    function readProfil($mysqli){
        $query = "SELECT * FROM UTILISATEUR";
        
        $result = mysqli_query($mysqli, $query);
       
        
        while($row = mysqli_fetch_row($result)){
            let login = $row[0];
            let age = $row[2];
            let nom = $row[4];
            let prénom= $row[5];
            let mail = $row[6];
            let data = {login, age, nom, prénom, mail};
            $.ajax({
            url : "../Front_end/profil.php",
                method : "GET",
                dataType: "json",
                data : data,
            })
            .done(function(){
                $("#dataProfil").append(`<tr><td>${login}</td><td>${nom}</td><td>${prénom}</td><td>${age}</td><td>${mail}</td></tr>`);
            })
            .fail(function(){
                console.log('Erreur lors de l\'affichage');
            })
        }

        echo mysqli_result($mysqli, $result);
        echo json_encode($result); 
    }

    </script>
?>