<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formularz.html">
</head>
<body>
<main>
<section>
<?php
include "db-connection.php";

if(isset($_POST['submit']) && !empty($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['surname'];
    $message = $POST['message'];
    $insert = mysqli_query($db, "INSERT INTO `wiadomosci`(`imie`, `email`, `tekst`) VALUES ('$name', '$email', '$message')");

    if(!$insert)
    {
        printf("Wystąpił błąd; %s\n", mysqli_error($link));
    }
    else
    {
        echo "Twoja wiadomość została wysłana";
    }
}

else
{
    echo "Brak danych w formularzu";
}
mysqli_close($db);
?>
</section>
</main>
    
</body>
</html>