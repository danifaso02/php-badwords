<?php
// dichiarazione paragrafo
$parag = 'In analisi matematica, l integrale è un operatore lineare che, nel caso di una funzione di una sola variabile a valori reali non negativi, associa alla funzione l area sottesa dal suo grafico entro un dato intervallo nel dominio. Se la funzione assume anche valori negativi, allora l integrale può essere interpretato geometricamente come l area orientata sottesa dal grafico della funzione.';

$censure_word = $_GET['word'] ?? null;
$text_censured = str_replace($censure_word, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
</head>
<body>
    <form action="">
        <label for="censure-word">Parola da censurare</label>
        <input id="censure-word" type="text" placeholder="Inserisci parola">
        <button type="submit">Invia</button>
    </form>

    <hr>

    <h3>Lunghezza: <?php echo strlen($parag); ?></h3>
    <p><?php echo $parag; ?></p>

    <hr>

    <h3>Lunghezza: <?php echo strlen($text_censured); ?></h3>
    <p><?php echo $text_censured; ?></p>
</body>
</html>