<?php
$servername = "localhost";
$username = "root";
$password ="";
$database = "notes";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
//     echo "success";
// }else{
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
?>