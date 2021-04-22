<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $badword=$_GET["badword"];

    $string = "Oggi abbiamo finalmente iniziato quel mazzo di php. La spiegazione è andata liscia come l'olio, ma l'installazione col mazzo che è andata così. C'era anche una simpatica slide con su scritto \"keep calm and var_dump\", ma noi non facevamo altro che pensare \"keep calm sto mazzo\"";

    $newstring = str_replace($badword,'***',$string);
    // var_dump($array)
    ?>


    <h1>Paragrafo over 18 è lungo <?php echo strlen($string) ?> caratteri</h1>
    <p>
    <?php
    echo $string
    ?>
    </p>

    <h1>Paragrafo censored è lungo <?php echo strlen($newstring) ?> caratteri</h1>
    <p>
    <?php
    echo $newstring
    ?>
    </p>

</body>
</html>