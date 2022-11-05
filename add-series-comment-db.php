
<?php
session_start();
include('config.php');
if((isset($_POST['submit'])))
{
    $comment=$_POST['comments'];
    $series_id=$_POST['series-id'];
    $season_id=$_POST['season-id'];
    $myquery = mysqli_query($con ,"INSERT INTO `comments`( `comments`, `series_id`) VALUES ('$comment','$series_id')");

    if($myquery){
        header("location:seriesdetail.php?series=$series_id&&season=$season_id");

    }else{
        header("location:seriesdetail.php?series=$series_id&&season=$season_id");

    }

}else{
    header("location:seriesdetail.php?series=$series_id&&season=$season_id");

}

?>
