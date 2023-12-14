<?php
$jsonContent = file_get_contents('matieres.json');
$data = json_decode($jsonContent, true);

foreach ($data as $matiere) {
    echo '<tr>';
    echo '<td>' . $matiere['nom'] . '</td>';
    echo '<td>'. $matiere['formations'] .'</td>';
    echo '<td>'. $matiere['durée'] .'</td>';
}
?>
