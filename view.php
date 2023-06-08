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



$sql = "SELECT * FROM `task_table`";
$result = mysqli_query($conn,$sql);


// find the num of rows

$num =  mysqli_num_rows($result);


// if($num>0){
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
// }

while($row = mysqli_fetch_assoc($result)){
    echo "s.no is" .$row['S.NO']. " " . "Name is" ." " . $row['NAME'] . " " . "Email is " . "" . $row['EMAIL'] . " " . $row['DESIGNATION'] . " " .$row['DEPARTMENT']."<br>";
}

?>
