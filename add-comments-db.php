<?php
session_start();
include('config.php');
if((isset($_POST['submit'])))
{
    $comment=$_POST['comments'];
    $movie_id=$_POST['movie-id'];
    $myquery = mysqli_query($con ,"INSERT INTO `comments`( `comments`, `movie-id`) VALUES ('$comment','$movie_id')");

    if($myquery){
        header("location:moviedetail.php?detail=$movie_id");

    }else{
        header("location:moviedetail.php?detail=$movie_id");

    }

}else{
    header("location:moviedetail.php?detail=$movie_id");

}

?>