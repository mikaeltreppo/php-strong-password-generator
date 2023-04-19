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
    <?php
    session_start();
    ?>
    <div class='redirect-page'>
        <?php

        ?>
        <div class="txtAlign ">La password generata è: <br>
         <span class="p20t">
                <?php echo $_SESSION['password']; ?>
            </span>
        </div>
    </div>

</body>

</html>