<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'task';


$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn) {
    echo "done";
    echo "<br>";
} else {
    echo "Wronge";
}


$id = $_POST['id'];

$sql  = "DELETE FROM `task_table`WHERE `S.NO`=$id";


if (mysqli_query($conn, $sql)) {
    if ($conn->affected_rows > 0) {
        echo "Record Delete Successfully";
    } else {
        echo "Record not found";
    }
} else {
    echo "Error";
}
