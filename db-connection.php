<?php

$db = mysqli_connect("localhost", "admin1", "admin1" "baza")

if(!$db)
{
    die("Connection failed:" . mysqli_connect_error());
}
?>