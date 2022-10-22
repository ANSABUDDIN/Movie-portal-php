<?php
include('../config.php');
session_start();
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($con,"SELECT * FROM admin  WHERE email='$email'&& password='$password'");

    if(mysqli_num_rows($result)>0)
        {
            foreach($result as $data)
            {
                $_SESSION["admin"]=$data;
                header("location:index.php");
            }
        }
        else
		{
                $_SESSION["error"] ="Wrong Username And Password ";
			    header("location:login.php");
            
		}

    }
else{
    header("location:login.php");
}

?>