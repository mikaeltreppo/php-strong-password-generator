<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <!-- lunghezza paswrd in form-->
    <form class="txtAlign form" action="index.php" method="GET">
        <label class="p20t" for="lunghezza">Inserisci la Lunghezza della password che vuoi creare.</label> <br>
        <input type="number" id="lunghezza" name="lunghezza">
        <button type="submit">Submit</button>
    </form>
    <?php

session_start();

   require __DIR__ . '/function.php';  
 
  
    ?>
    <div class="txtAlign ">La password generata è: <br> <span class="p20t">
        <?php echo pswrdGenerator(); ?>
    </span>
    </div>
    <?php

    ?>



</body>

</html>