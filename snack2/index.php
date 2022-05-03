<!-- Snack 2
Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo
di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
if (isset($_GET["name"])) {
    $name = $_GET["name"];

    if (strlen($name) <= 3) {
        $name = "Inserisci un nome che sia almeno più lungo di 3 caratteri";
    }
}

if (isset($_GET["mail"])) {
    $mail = $_GET["mail"];

    if (!strpos($mail, "@") || !strpos($mail, ".")) {
        $mail = 'Hai dimenticato di inserire il "." o la "@"';
    }
}

if (isset($_GET["age"])) {
    $age = $_GET["age"];

    if (!is_numeric($age)) {
        $age = "Inserisci un numero";
    }
}
?>

<h1><?php echo $name ?></h1>
<h1><?php echo $mail ?></h1>
<h1><?php echo $age ?></h1>