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
$name = $_POST['name'];
$email = $_POST['email'];
$designation = $_POST['designation'];
$department = $_POST['department'];
$contact = $_POST['contact'];


$sql = "UPDATE `task_table` SET `NAME`='$name',`EMAIL`='$email',`DESIGNATION`='$designation',`DEPARTMENT`='$department',`CONTACT`='$contact' where `S.NO`=$id ";
if(mysqli_query($conn,$sql)){
    if($conn->affected_rows>0){
        echo "update successfully";

    }
    else{
        echo "Recorde not found";
    }
}
else{
    echo "error";
}
