<?php
require_once("../database/database.php");

$name = $db->real_escape_string($_POST['name']);
$email = $db->real_escape_string($_POST['email']);
$password = md5($db->real_escape_string($_POST['password']));

$check_table = "SELECT * FROM register";
$response = $db->query($check_table);

if($response){
    $insert_data = "INSERT INTO register(name,email,password) VALUES('$name','$email','$password')";
    $response = $db->query($insert_data);
      if($response){
          echo"success";
      }
      else{
          echo"Failed to data store";
      }  
}else{
    $create_table = "CREATE TABLE register(
        id INT(10) NOT NULL AUTO_INCREMENT,
        name VARCHAR(50),
        email VARCHAR(100),
        password VARCHAR(255),
        PRIMARY KEY(id)
    )";

    $response = $db->query($create_table);
     
    if($response){
        $insert_data = "INSERT INTO register(name,email,password) VALUES('$name','$email','$password')";
        $response = $db->query($insert_data);
          if($response){
              echo"success";
          }
          else{
              echo"Failed to data store";
          }  
    }else{
        echo"Failed to create table";
    }


}