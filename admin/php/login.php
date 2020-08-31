<?php
require_once("../database/database.php");

$email = $db->real_escape_string($_POST['email']);
$password = md5($db->real_escape_string($_POST['password']));

$user_mail = "SELECT email FROM register WHERE email='$email'";
$response=$db->query($user_mail);
if(($response->num_rows)!=0)
{
    $user_password = "SELECT * FROM register WHERE email='$email' AND password ='$password'";
    $responsePassword=$db->query($user_password);
        if(($responsePassword->num_rows)!=0)
        {
            echo "success";
            session_start();
            $_SESSION['username'] = $email;  
        }else{
            echo "password invalid";
        }  

}else{
    echo "User does not exits";
}
