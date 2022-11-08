<?php
session_start();
include('../config.php');
if((isset($_POST['submit'])))
{
    
    $title=$_POST['title'];
    $description=$_POST['description'];
    $Series_link=$_POST['series_link'];
    $download_link=$_POST['download_link'];
    $trailer_link=$_POST['trailer'];
    $release_year=$_POST['release_year'];
    $director_name=$_POST['director_name'];
    $Series_star=$_POST['series_star'];
    $country=$_POST['country'];
    // $date=date("Y-m-d");
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
        header("location:add-series.php");
    }
     
    $myquery = "INSERT INTO `series`(`title`, `description`, `series_link`, `download_link`, `trailer`, `release_year`, `director_name`, `series_star`, `country`, `image`) VALUES ('$title','$description','$Series_link','$download_link','$trailer_link','$release_year','$director_name','$Series_star','$country','$lsdestinationfile')";

    $result = mysqli_query($con, $myquery);
    // $result = mysqli_query($con,"INSERT INTO `Series`(`title`,`description`,`Series_link`,`download_link`,`trailer_link`,`release_year`,`director_name`,`Series_star`,`image`,`country`,`category`)
    // VALUES ('$title','$description','$Series_link','$download_link','$release_year','$director_name','$Series_star','$lsdestinationfile','$country','$category')");
    if($result)
    {
        $_SESSION['message']=" Series successfully add";
        header("location:series.php");

    }else
    {
        $_SESSION['error']=" Series add to fail";
        header("location:series.php");
    }
}
else
{
    header("location:series.php");
}



?>