<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Faid : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO `contact_us`(`first_name`, `last_name`, `phone`, `message`) VALUES (?,?,?,?)");
    $stmt->bind_param("ssis",$firstname,$lastname,$phone,$message);
    $stmt->execute();
    echo "Submit successfully....";
    $stmt->close();
    $conn->close();
}
?>