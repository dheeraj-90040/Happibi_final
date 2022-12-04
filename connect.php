<?php

 $email = $_POST['email'];
 $password = $_POST['password'];

 // connecting database 

 $conn = new mysqli('localhost','root','','test');
 if($conn->connect_error){
    die('connection failed : ' .$conn->connect_error)

 }else{

    $stmt = $conn->prepare("insert into Happibi( email, password) values(?,?)");

    $stmt->bind_param("ss"m$email, $email);

    $stmt->execute();
    echo " login successfully";
    $stmt->close();
    $conn->close();
    
 }
?>