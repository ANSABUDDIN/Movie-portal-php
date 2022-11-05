
<?php
session_start();
include('config.php');
if((isset($_POST['submit'])))
{
    $comment=$_POST['comments'];
    $series_id=$_POST['series-id'];
    $season_id=$_POST['season-id'];
    $episode_id=$_POST['episode-id'];
    $myquery = mysqli_query($con ,"INSERT INTO `comments`( `comments`, `series_id` ,`season_id`,`episode_id`) VALUES ('$comment','$series_id','$season_id','$episode_id')");

    if($myquery){
        header("location:episode.php?series=$series_id&&season=$season_id&&episode=$episode_id");

    }else{
        header("location:episode.php?series=$series_id&&season=$season_id&&episode=$episode_id");

    }
}else{
    header("location:episode.php?series=$series_id&&season=$season_id&&episode=$episode_id");

}

?>
