<!DOCTYPE html>
<html>
    <head>
        <title>Exemplo</title>
    </head>
    <body>

        <?php
            $ano=$_GET["ano"];
            echo "o ano atual é $ano";
            $anoanterior=$ano - 1;
            echo "<br> o ano anterior é $anoanterior";
            $anosucessor=$ano + 1;
            echo "<br> o ano sucessor é $anosucessor";
/*
<!DOCTYPE html>
<html>
<head>
    <title>Exemplo</title>
</head>
<body>
    <?php
    $ano = date("Y");
    echo "O ano atual é $ano";
    $anoanterior = $ano - 1;
    echo "<br>O ano anterior é $anoanterior";
    $anosucessor = $ano + 1 ;
    echo "<br>O ano sucessor é $anosucessor";
    ?>
</body>
</html>

metodo mais fácil
*/
        ?>
    </body>
</html>

