<!-- Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà
contenere lo stesso numero più di una volta -->
<?php
$arrayNumbers = [];
while (count($arrayNumbers) < 15) {
    $randomNumber = rand(1, 50);
    if (!in_array($randomNumber, $arrayNumbers)) {
        $arrayNumbers[] = $randomNumber;
    }
}
?>

<h1><?php echo implode(" ~ ", $arrayNumbers) ?></h1>