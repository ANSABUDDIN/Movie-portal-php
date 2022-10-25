<?php
session_start();
include('../config.php');
if((isset($_POST['submit'])))
{
    
    $title=$_POST['title'];
    $category=$_POST['category'];
    $logo=$_FILES['file'];	
    $lfilename = $logo['name'];
    $lfileerror = $logo['error'];
    $lfiletmp = $logo['tmp_name'];
    $lfilestore = explode('.',$lfilename);
    $lfilecheck = strtolower(end($lfilestore));
    $lfilecheckstore = array('jpg','png','jpeg','gif');
    if (in_array($lfilecheck,$lfilecheckstore))
    { 
        $ldestinationfile ='../assets/images/ads/'.$lfilename;
        $lsdestinationfile ='assets/images/ads/'.$lfilename;
        move_uploaded_file($lfiletmp,$ldestinationfile);
    }else
    {
        $_SESSION['error']=" Invalid Formate Please Check Again";
        header("location:add-banner.php");
    }
     
  
    $myquery = "INSERT INTO `ads`( `title`,`category`, `image`) VALUES ('$title','$category','$lsdestinationfile')";

    $result = mysqli_query($con, $myquery);
    
    if($result)
    {
        $_SESSION['message']=" Ads successfully add";
        header("location:ads.php");

    }else
    {
        $_SESSION['error']=" Ads add to fail";
        header("location:ads.php");
    }
}
else
{
    header("location:ads.php");
}



?>