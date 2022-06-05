<?php

$db = mysqli_connect("192.168.64.8", "admin1", "admin1" "baza")

if(!$db)
{
    die("Connection failed:" . mysqli_connect_error());
}
?>