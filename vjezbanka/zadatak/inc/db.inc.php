<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbName = "trans";

 $conn = mysqli_connect($servername, $username, $password, $dbName);

 if (!$conn) {
     die(" Connection field " . mysqli_connect_error());
 } else {
     return $conn;
 }