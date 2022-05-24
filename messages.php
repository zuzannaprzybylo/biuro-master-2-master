<?php

include "db-connection.php";

$sql="SELECT id, imie, nazwisko, tekst FROM wiadomosci";
$result=mysqli_query($db, $sql);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "id: ".$row["id"]. " Name: ",$row["imie"];
    }
}else{
    echo "Brak danych";
}

mysqli_close($db);
?>