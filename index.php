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
    
    
    
    $lunghezze=isset($_Get ['lunghezza']);
 
    $lettereNumeri = ['a','b','f','d','@','w','*','d','f','!','g','r','?','ì','9','1','3','4','5','3','2','3','4','£',];

     echo $lunghezze;


    ?>



</body>

</html>