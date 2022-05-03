<!-- Snack Bonus
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php
$student = [
    [
        "name" => "Ciro",
        "surname" => "Cusati",
        "vote" => [8, 7, 6]
    ],
    [
        "name" => "Lucio",
        "surname" => "Melis",
        "vote" => [6, 6, 9]
    ],
    [
        "name" => "Luca",
        "surname" => "Vitullo",
        "vote" => [6, 7, 6]
    ],
];

for ($i = 0; $i < count($student); $i++) {
    echo ("Nome: " . $student[$i]["name"] . "</br>");
    echo (" Cognome: " . $student[$i]["surname"] . "</br>");
    $average = 0;
    for ($k = 0; $k < count($student[$i]["vote"]); $k++) {
        $average += $student[$i]["vote"][$k];
    }
    echo (" Media voti: " . round($average / 3) . "</br>");
    echo ("</br>");
}
?>