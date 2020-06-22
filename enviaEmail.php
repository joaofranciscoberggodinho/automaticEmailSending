<?php
    session_start();

    $email = $_POST['email'];

    $archive = fopen("login.txt","a+");

    fwrite($archive , "E-mail: " . $email . "\n");

    $subject = "Curso Unity!";
    $message = "Parabéns! Você conseguiu acesso completo ao curso grátis de Unity! <br/> <br/> Link: http://www.sbgames.org/papers/sbgames09/computing/tutorialComputing2.pdf";
    $headers = "MIME-Version: 1.1\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: diogenesdie@gemolstpc.ga\r\n";

    mail($email, $subject, $message, $headers);

    fclose($archive);
    session_destroy();

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./style/style.css">
        <title>Crie jogos grátis!</title>
    </head>
    <body>
        <div id="enviado"><h1> Seu curso será enviado em seu E-Mail! </h1></div>
    </body>
    </html>

