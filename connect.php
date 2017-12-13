<?php

$conn = new mysqli('localhost','root','','test');

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
else
{


    $result = $conn->query("select * from testowas");
    while($row = $result->fetch_assoc()){

        echo $row['tytul'].'<br>';
    }
    $conn->close();
    echo 'Udalo sie';
}

