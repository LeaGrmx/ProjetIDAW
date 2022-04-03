<?php

    require_once("database.php");
    $mysqli->set_charset("utf8mb4");

    $query = "SELECT * FROM MANGE";

    $result = mysqli_query($mysqli, $query);

    /* Recherché la ligne 11 */
    /* mysqli_data_seek($result, 10); */

    /* Récupération de cette ligne */
    /* $row = mysqli_fetch_row($result);
    printf("Repas: %s  Place_repas: %s\n", $row[5], $row[6]); */

    while ($row = $result->fetch_row()) {
        printf("Date: %s Heure: %s Repas: %s Place_repas: %s Aliment: %s Quantité: %d \n", $row[3], $row[4], $row[5], $row[6], $row[0], $row[2]);
    }

?>