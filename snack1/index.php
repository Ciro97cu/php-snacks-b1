<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di
casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$basketballMatches = [
    [
        "home" => "Nets",
        "away" => "Cavaliers",
        "homePoints" => 115,
        "awayPoints" => 108
    ],
    [
        "home" => "Hawks",
        "away" => "Hornets",
        "homePoints" => 132,
        "awayPoints" => 103
    ],
    [
        "home" => "Pelicans",
        "away" => "Spurs",
        "homePoints" => 113,
        "awayPoints" => 103
    ],
    [
        "home" => "Magic",
        "away" => "Heat",
        "homePoints" => 125,
        "awayPoints" => 111
    ],
    [
        "home" => "Grizzlies",
        "away" => "Celtics",
        "homePoints" => 110,
        "awayPoints" => 139
    ],
];
for ($i = 0; $i < count($basketballMatches); $i++) {
    echo ($basketballMatches[$i]["home"] . " - " . $basketballMatches[$i]["away"]);
    echo (" | " . $basketballMatches[$i]["homePoints"] . " - " . $basketballMatches[$i]["awayPoints"] . "</br>");
    // echo implode(" - ", $basketballMatches[$i]) . "</br>"; // metodo alternativo utilizzando implode
}
?>