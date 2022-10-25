<?php
session_start();
include('../config.php');
if((isset($_POST['submit'])))
{
    
    $title=$_POST['movie-name'];
    $logo=$_FILES['file'];	
    $lfilename = $logo['name'];
    $lfileerror = $logo['error'];
    $lfiletmp = $logo['tmp_name'];
    $lfilestore = explode('.',$lfilename);
    $lfilecheck = strtolower(end($lfilestore));
    $lfilecheckstore = array('jpg','png','jpeg');
    if (in_array($lfilecheck,$lfilecheckstore))
    { 
        $ldestinationfile ='../assets/images/webimages/'.$lfilename;
        $lsdestinationfile ='assets/images/webimages/'.$lfilename;
        move_uploaded_file($lfiletmp,$ldestinationfile);
    }else
    {
        $_SESSION['error']=" Invalid Formate Please Check Again";
        header("location:add-banner.php");
    }
     
  
    $myquery = "INSERT INTO `banner`( `movie-name`, `image`) VALUES ('$title','$lsdestinationfile')";

    $result = mysqli_query($con, $myquery);
    
    if($result)
    {
        $_SESSION['message']=" Banner successfully add";
        header("location:banner.php");

    }else
    {
        $_SESSION['error']=" Banner add to fail";
        header("location:banner.php");
    }
}
else
{
    header("location:banner.php");
}



?>