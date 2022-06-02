<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <section>
    <?php

include "db-connection.php";
 if(isset($_POST['login'],$_POST['haslo'])){
    $username=$_POST['login'];
    $password=$_POST['haslo'];

    $username=stripcslashes($username);
    $password=stripcslashes($password);

    $sql="SELECT * FROM uytkownicy where login='$username' and hasło='$password'";
    $result=mysqli_query($db, $sql);
    $row=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);

    if($count==1){
        $_SESSION['name']=$username;
        echo "Jesteś zalogowany/a";
    }else{
        echo "Błędny login lub hasło";
    }
}
?>
<section>

</section>
<h2>Wiadomości</h2>
    <?php

    include "db-connection.php";

    if(isset($_SESSION['name'])){
    $sql="SELECT id, imie, nazwisko, tekst FROM wiadomosci";
    $result=mysqli_query($db, $sql);

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "id: ".$row["id"]. " Name: ",$row["imie"];
        }
        }else{
            echo "Brak danych";
        }
    }

mysqli_close($db);
?>
</section>

<footer>
    <p>Wyloguj się, aby wrócić na stronę formularza.</p>
    <a class="link" href="logout.php">Wyloguj się</a>
</footer>

</body>
</html>

