<?php
include 'header.php';
include 'config.php';

if (isset($_GET['series'])) {
    $series_id = $_GET['series'];
    $series = mysqli_query($con, "SELECT * FROM `series` where id='$series_id'");
    foreach ($series as $series_detail) {
        $title = $series_detail['title'];
        $image = $series_detail['image'];
        $description = $series_detail['description'];
        $release_year = $series_detail['release_year'];
        $director_name = $series_detail['director_name'];
        $series_star = $series_detail['series_star'];
        $director_name = $series_detail['director_name'];
        $series_link = $series_detail['series_link'];
        $download_link = $series_detail['download_link'];
        $trailer = $series_detail['trailer'];
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

// $movie = mysqli_query($con, "select * from episode where  `series_id`='$series_id'");
// foreach ($movie as $GETmovie) {
//     $season_name = $GETmovie['season']; 
// }
?>

<section class="banner__iz container mt-5">
    <div class="row mx-0 gap-lg-0 gap-5">
        <div class="col-lg-9 ps-0">
            <div class="row mx-0 gap-lg-0 align-items-center gap-4">

                <div class="col-lg-12 px-lg-0">
                    <div class="d-flex justify-content-center w-100 mx-auto my-4">
                        <iframe width="100%" class="rounded-3" height="415" src="<?php echo $trailer; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <!-- <h3 class="capitalize text-light">

                        <?php echo $title . " | | " . $release_year; ?>
                    </h3>
                    <h6 class="capitalize text-light">
                
                    </h6> -->
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
    <div class="row mx-0 gap-lg-0 gap-5">
        <div class="col-lg-9 ps-0">
            <div class="row mx-0 gap-lg-0 align-items-center gap-4">
                <div class="col-lg-5 ps-0">
                    <!-- <img class="card__banner w-100 h-100" style="border-radius: 24px;"
                            src="assets/images/Landscape.png" alt=""> -->
                    <img class="card__banner w-100 " style="border-radius: 24px;" src="<?php echo $image; ?>" alt="">

                </div>
                <div class="col-lg-7">
                    <!-- <h2 class="text-white text-capitalize">The Joker</h2> -->
                    <h2 class="text-white text-capitalize">
                        <?php echo $title; ?>
                    </h2>
                    <!-- <p class="text-white mt-4">
                        <?php echo $season_name; ?>
                    </p> -->
                    <p class="text-white">2h 56 m</p>
                    <p class="text-white">16 +</p>
                    <p class="text-white">Director : <span class="text_gray">
                            <?php echo $director_name; ?>
                        </span></p>
                    <p class="text-white">Actors: <span class="text_gray">
                            <?php echo $series_star; ?>.
                        </span> </p>

                    <div class="d-flex gap-2 flex-wrap align-items-center mt-4">
                        <a href="<?php echo $movie_link; ?>">
                            <button class="btn btn-light text-uppercase button__radius px-3">
                                <span class="d-flex align-items-center gap-3">
                                    <span>Watch</span> <span style="font-size: 11px;">►</span>
                                </span>

                            </button>
                        </a>
                        <button class="btn btn-gray text-uppercase button__radius px-3">
                            <span class="d-flex align-items-center gap-3">
                                <span>My list</span> <span style="font-size: 16px; font-weight: bolder;">+</span>
                            </span>

                        </button>
                        <a href="<?php echo $download_link; ?>">
                            <button class=" btn-gray text-uppercase rounded-circle download__btn">
                                <span class="d-flex align-items-center gap-3">
                                    <span> <i class="fa-solid fa-download text-white"></i></span>
                                </span>

                            </button>
                        </a>
                    </div>
                    <div class="d-flex gap-2 flex-wrap align-items-center mt-4">
                        <div>
                            <img src="assets/images/imdb.png" alt="" class="img-fluid">
                            <span class="text-warning fw-bold">7.6</span>
                        </div>
                        <div>
                            <img src="assets/images/ua.png" alt="" class="img-fluid">

                        </div>
                        <div>
                            <img src="assets/images/4k.png" alt="" class="img-fluid">

                        </div>
                        <p class="mb-0 text-muted fw-bold">2015</p>
                    </div>


                </div>
                <h5 class="pt-5 px-0 capitalize text-light">
                    <?php echo $title . " All Seasons "; ?>
                </h5>
                <div class="text-center">
                    <div class="row  gap-2 auti my-4">

                        <?php
                        $sql = "SELECT  DISTINCT season FROM `episode` where series_id='$series_id' order by season ASC ";
                        $season = mysqli_query($con, $sql);

                        foreach ($season as $GETseason) { ?>
                            <div class="col-lg-2 col-12 px-0 d-flex justify-content-center">
                                <a href="seriesdetail.php?series=<?php echo $series_id; ?>&season=<?php echo $GETseason['season']; ?>" class="btn btn-gray-1 w-100 px-3 ">
                                    Season <?php echo $GETseason['season'];  ?>
                                </a>
                            </div>
                        <?php
                        }
                        ?>



                    </div>
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
            <?php echo $title . " Season " . $season_name . " Episodes "; ?>
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
    <div class="d-flex justify-content-center w__75 mx-auto my-4">

        <iframe width="100%" class="rounded-3" height="415" src="<?php echo $trailer; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
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
            <form action="add-series-comment-db.php" method="post">
                <div class="bg_gray w-100 button__radius py-3 d-flex justify-content-between px-4">
                    <input type="text" name="comments" class="bg-transparent  border-0 nofocus w-100 text-white placeholder_white" placeholder="leave a comment ...">
                    <input type="hidden" name="series-id" value="<?php echo $series_id; ?>">
                    <input type="hidden" name="season-id" value="<?php echo $season_name; ?>">
                    <button class="btn-gray-1 " name="submit" type="submit">
                        Send
                    </button>

                </div>
            </form>
            <?php
            $result = mysqli_query($con, "Select * from comments where `series_id` =$series_id order by id DESC LIMIT 3");
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