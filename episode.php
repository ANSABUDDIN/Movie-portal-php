<?php
include 'header.php';
include 'config.php';

if (isset($_GET['episode'])) {
    $episode_id = $_GET['episode'];
    $episode = mysqli_query($con, "SELECT * FROM `episode` where id='$episode_id'");
    foreach ($episode as $episode_detail) {
        $title = $episode_detail['title'];
        $image = $episode_detail['image'];
        $series_id = $episode_detail['series_id'];
        $date = $episode_detail['date'];
        // $description = $episode_detail['description'];
        // $release_year = $episode_detail['release_year'];
        // $director_name = $episode_detail['director_name'];
        // $series_star = $episode_detail['series_star'];
        // $director_name = $episode_detail['director_name'];
        // $series_link = $episode_detail['series_link'];
        // $download_link = $episode_detail['download_link'];
        $trailer = $episode_detail['link'];
    }
} else {
    $title = "";
    $image = "";
    $description = "";
    $release_year = "";
    $director_name = "";
    $category = "";
    $movie_star = "";
}
if (isset($_GET['season'])) {
    $season_name = $_GET['season'];
}

$series = mysqli_query($con, "SELECT * FROM `series` where id='$series_id'");
foreach ($series as $series_detail) {
    $series_name = $series_detail['title'];
    $release_year = $series_detail['release_year'];
}


?>

<section class="banner__iz container mt-5">
    <div class="row mx-0 gap-lg-0 gap-5">
        <div class="col-lg-9 ps-0">
            <div class="row mx-0 gap-lg-0 align-items-center gap-4">

                <div class="col-lg-12 px-lg-0">
                    <div class="d-flex justify-content-center w-100 mx-auto my-4">
                        <iframe width="100%" class="rounded-3" height="415" src="<?php echo $trailer; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen></iframe>
                    </div>
                    <h3 class="capitalize text-light">

                        <?php echo $series_name ." Season  ". $season_name ."  ". $title ." | ". $release_year; ?>
                    </h3>
                    <h6 class="capitalize text-light">
                
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="d-flex flex-column ">
                <div class="vertical-small">
                    <?php
                    $ads = mysqli_query($con, "select * from ads where category= 'sidebanner'");
                    foreach ($ads as $GETads) {
                    ?>
                        <div class="card-small">
                            <div class="cards">
                                <div class="pe-3">
                                    <img src="<?php echo $GETads['image']; ?>" class="adsbonus" alt="" style="border-radius: 20px;">
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container pt-5">
        <h5 class="capitalize text-light">
        Remain Episodes
        </h5>
        <div class="row mx-0">
            <div class="slider-single">
                <?php
                $movie = mysqli_query($con, "select * from episode where `series_id`='$series_id' And season='$season_name'");
                if (mysqli_num_rows($movie) > 0) {
                    foreach ($movie as $GETmovie) { ?>
                        <div class="card-main ">
                            <div class="cards cards-4 ">
                                <div class="d-flex">
                                    <!-- <div class="ratings">
                                    <i class="fa-solid fa-star"></i> 5.1
                                </div> -->
                                </div>
                                <div>
                                    <a href="episode.php?series=<?php echo $series_id ?>&&episode=<?php echo $GETmovie['id']; ?>&&season=<?php echo $season_name ?>"><img class="card-img  " src="<?php echo $GETmovie['image']; ?>" alt=""></a>
                                </div>

                            </div>
                            <div class="text-center">
                                <div class=" movie-name-4 text-white my-3  ">
                                    <p class="capitalize">
                                        <?php echo $GETmovie['title']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                <?php
                } else {
                ?>
                    <div class="text-danger my-3">
                        Comming Soon
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section class="description__video container mt-5">
    <!-- <p class="text-white fs-5">Description</p> -->
    <p class="text_gray">
        <!-- <?php echo $description; ?> -->

    </p>
    <!-- <div class="d-flex justify-content-center w__75 mx-auto my-4">

        <iframe width="100%" class="rounded-3" height="415" src="<?php echo $trailer; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div> -->
</section>

<section class="small pt-lg-5 pt-3">
    <div class="container">
        <div class="slider-small">
            <?php
            $ads = mysqli_query($con, "select * from ads where category= 'main-banner'");


            foreach ($ads as $GETads) { ?>
                <div class="card-small">
                    <div class="cards">
                        <div class="pe-3">
                            <img src="<?php echo $GETads['image']; ?>" class="small-img" alt="">
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</section>


<section class="comments container my-5">
    <div class="row mx-0 gap-lg-0 gap-5">
        <div class="col-lg-9 ps-0">
            <p class="fs-5 text-white">
                Comments
            </p>
            <form action="add-episode-comment-db.php" method="post">
                <div class="bg_gray w-100 button__radius py-3 d-flex justify-content-between px-4">
                    <input type="text" name="comments" class="bg-transparent  border-0 nofocus w-100 text-white placeholder_white" placeholder="leave a comment ...">
                    <input type="hidden" name="season-id" value="<?php echo $season_name;?>">
                    <input type="hidden" name="episode-id" value="<?php echo $episode_id; ?>">
                    <input type="hidden" name="series-id" value="<?php echo $series_id; ?>">

                    <button class="btn-gray-1 " name="submit" type="submit">
                        Send
                    </button>

                </div>
            </form>
            <?php
            $result = mysqli_query($con, "Select * from comments where `episode_id` =$episode_id order by id DESC LIMIT 3");
            foreach ($result as $Getresult) {
            ?>
                <div class="d-flex gap-lg-3 align-items-center  gap-md-5 gap-3 mt-5 ">
                    <div class="comment__avatar">
                        <img src="assets/images/footerbg.jpg" alt="" class=" img-fluid rounded-circle ">
                    </div>

                    <div class="comment__content">
                        <div class="d-flex gap-5 ">
                            <div>
                                <p class="fs-custom text-white text-capitalize"> Unknown</p>
                            </div>
                            <div>
                                <p class="text_gray fs-custom"><?php echo $Getresult['date'] ?></p>
                            </div>
                        </div>
                        <div>
                            <p class="text_gray">
                                <?php echo $Getresult['comments'] ?>
                            </p>
                        </div>
                    </div>

                </div>
            <?php
            }
            ?>

        </div>
        <div class="col-lg-3">
            <div class="d-flex flex-column gap-4">
                <div class="vertical-small">
                    <?php
                    $ads = mysqli_query($con, "select * from ads where category= 'sidebanner'");
                    foreach ($ads as $GETads) {
                    ?>
                        <div class="card-small">
                            <div class="cards">
                                <div class="pe-3">
                                    <img src="<?php echo $GETads['image']; ?>" class="adsbonus" alt="" style="border-radius: 20px;">
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>


</section>

<?php
include 'footer.php'
?>