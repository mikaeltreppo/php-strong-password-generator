<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- lunghezza paswrd in form-->
    <form action="index.php" method="GET">
        <label for="lunghezza">Lunghezza password</label>
        <input type="number" id="lunghezza" name="lunghezza">
        <button type="submit">Submit</button>
    </form>
    <?php


   

    function pswrdGenerator () {
        $lunghezzaScelta =(int)$_GET['lunghezza'];
        $alfabeto = "abcdefghi123456789ABCDEFGHI+*ù§#@!?";
        $pswd = array();
        $alfabetoLunghezza = strlen($alfabeto) - 1;
        for ($i = 0; $i < $lunghezzaScelta; $i++) {
            $numeroCaratteri = rand(0, $alfabetoLunghezza);
            $pswd[] = $alfabeto[$numeroCaratteri];
        }
        return implode($pswd);
    };

  var_dump( pswrdGenerator());

    ?>



</body>

</html>