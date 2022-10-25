<?php
session_start();
include('../config.php');
if((isset($_POST['submit'])))
{
    
    $title=$_POST['title'];
    $description=$_POST['description'];
    $movie_link=$_POST['movie_link'];
    $download_link=$_POST['download_link'];
    $trailer_link=$_POST['trailer_link'];
    $release_year=$_POST['release_year'];
    $director_name=$_POST['director_name'];
    $movie_star=$_POST['movie_star'];
    $country=$_POST['country'];
    $category=$_POST['category'];
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
        header("location:add-movie.php");
    }
     
    $myquery = "INSERT INTO `movie`(`title`, `description`, `movie_link`, `download_link`, `trailer_link`, `release_year`, `director_name`, `movie_star`, `country`, `image`, `category`) VALUES ('$title','$description','$movie_link','$download_link','$trailer_link','$release_year','$director_name','$movie_star','$country','$lsdestinationfile','$category')";

    $result = mysqli_query($con, $myquery);
    // $result = mysqli_query($con,"INSERT INTO `movie`(`title`,`description`,`movie_link`,`download_link`,`trailer_link`,`release_year`,`director_name`,`movie_star`,`image`,`country`,`category`)
    // VALUES ('$title','$description','$movie_link','$download_link','$release_year','$director_name','$movie_star','$lsdestinationfile','$country','$category')");
    if($result)
    {
        $_SESSION['message']=" Movie successfully add";
        header("location:movies.php");

    }else
    {
        $_SESSION['error']=" Movie add to fail";
        header("location:movies.php");
    }
}
else
{
    header("location:movies.php");
}



?>