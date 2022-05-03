<!-- Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<?php
$paragraph = "Questo è il quarto snack. Questo esercizio è finito. Ciao mi chiamo Ciro. L'auto è di colore rosso.";
$newParagraph = explode(".", $paragraph);
?>

<h1><?php echo implode("</br>", $newParagraph) ?></h1>