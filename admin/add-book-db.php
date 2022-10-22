<?php
session_start();
include('../config.php');
if((isset($_POST['submit'])))
{
    
    $ebook=$_POST['ebook'];
    $amount=$_POST['amount'];
    $description=$_POST['description'];
    $date=date("Y-m-d");

    $logo=$_FILES['file'];	
    $lfilename = $logo['name'];
    $lfileerror = $logo['error'];
    $lfiletmp = $logo['tmp_name'];
    $lfilestore = explode('.',$lfilename);
    $lfilecheck = strtolower(end($lfilestore));
    $lfilecheckstore = array('jpg','png','jpeg');
    if (in_array($lfilecheck,$lfilecheckstore))
    { 
        $ldestinationfile ='../assets/images/ebook/'.$lfilename;
        $lsdestinationfile ='assets/images/ebook/'.$lfilename;
        move_uploaded_file($lfiletmp,$ldestinationfile);
    }else
    {
        $_SESSION['error']=" Invalid Formate Please Check Again";
        header("location:add-book.php");
    }
   
    $result = mysqli_query($con,"INSERT INTO `ebook`(`title`,`price`,`description`,`image`,`date`)
    VALUES ('$ebook','$amount','$description','$lsdestinationfile','$date')");
    if($result)
    {
        $_SESSION['message']=" Ebook successfully add";
        header("location:ebooks.php");

    }else
    {
        $_SESSION['error']=" Information add to fail";
        header("location:ebooks.php");
    }
}
else
{
    header("location:ebooks.php");
}



?>