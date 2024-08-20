<?php
    $connection = new mysqli('localhost', 'root', '','ite203k');

    if($connection->connect_error){
        die("connect failed : ".$connection->connect_error);
    }


    // get data 

    $u_name     = $_POST['uname'];
    $password   = $_POST['psw'];


    $sql = "INSERT INTO login_uc (username , psw) VALUES('$u_name', '$password')";

    if($connection->query($sql)===TRUE){
        echo "form login successful";
    }else{
        echo  "Error : ".$sql."</br?".$connection->error;
    }
?>