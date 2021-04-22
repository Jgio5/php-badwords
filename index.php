<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Bad Words</title>
</head>
<body>
    
    <!--parola da inserire nell'URL (es: http://localhost/php-badwords/?badWord=esempio)-->
    <?php
        $badWord = $_GET["badWord"];
    ?>

    <!-- Stringa che viene passata prima di visualizzarla (effetto cascata)-->
    <?php
        $string = "Il più bello dei mari
        è quello che non navigammo.
        Il più bello dei nostri figli
        non è ancora cresciuto.
        I più belli dei nostri giorni
        non li abbiamo ancora vissuti.
        E quello
        che vorrei dirti di più bello
        non te l'ho ancora detto.";
    ?>

    <!-- Misuro la lunghezza della stringa -->
    <h1>Il paragrafo è lungo: <?php echo strlen($string)?> caratteri.</h1>

    <p> <?php echo $string; ?> </p>

    <!-- Variabile che uso per sostituire il GET con *** -->
    <?php
        $newString = str_replace($badWord, "***", $string);
    ?>

    <h1>Il nuovo paragrafo è lungo: <?php echo strlen($newString)?> caratteri.</h1>

    <p> <?php echo $newString;?> </p>

</body>
</html>