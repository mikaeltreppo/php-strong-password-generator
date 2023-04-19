
<?php
session_start();
function pswrdGenerator()
    {

        if (isset($_GET['lunghezza']) && $_GET['lunghezza'] > 0) {
            $lunghezzaScelta = (int) $_GET['lunghezza'];
            $alfabeto = "abcdefghi123456789ABCDEFGHI+*ù§#@!?";
            $pswd = array();
            $alfabetoLunghezza = strlen($alfabeto) - 1;
            for ($i = 0; $i < $lunghezzaScelta; $i++) {
                $numeroCaratteri = rand(0, $alfabetoLunghezza);
                $pswd[] = $alfabeto[$numeroCaratteri];
            }
            header('Location:  ./redirect.php');
            $pswdImplosa = implode($pswd);
            $_SESSION['password'] = $pswdImplosa;
            return $pswdImplosa;
        } else {
            ?>
            <div class="impossible redBg">
                impossibile creare una password, Assicurarsi di aver inserito caratteri validi e una lunghezza minimo di 1 carattere.
            </div>
            <?php

        }
 
    };      
   
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php ?>
    </body>
    </html>