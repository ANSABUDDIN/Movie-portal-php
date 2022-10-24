<?php
include 'header.php';
include 'config.php';
?>
<section class="banner">
    <div class="container">
        <div class="slider-banner">
            <?php 
               $banner = mysqli_query($con, "select * from banner");
                     foreach ($banner as $GETbanner) { ?>
            <div class="card-banner ">
                <div class="cards">
                    <div>
                        <a href="#"><img src="<?php echo $GETbanner['image'];?>" class="banner-img" alt="hello"></a>
                    </div>
                </div>
            </div>
            <?php
             }
             ?>
        </div>
    </div>
</section>

<div class="container">
    <section class="small pt-lg-5 pt-3">
        <div class=" ">
            <div class="d-flex justify-content-between">
                <h5 class="text-light">Latest Movies to Watch</h5>
               <a href="series.php?series=Movie"><p class="pointer fs-7">Explore More<i class="fa-solid fa-arrow-right-long ps-2"></i></p></a>
            </div>
            <div class="slider-single">
                <?php 
                if(isset($_GET['series'])){
                    $movie = mysqli_query($con, "select * from movie where category='".$_GET['series']."'");
                }
                else
                {
                    $movie = mysqli_query($con, "select * from movie");
                }
               
                     foreach ($movie as $GETmovie) { ?>
                <div class="card-main ">
                    <div class="cards ">
                        <div class="d-flex">
                            <!-- <div class="ratings">
                                <i class="fa-solid fa-star"></i> 5.1
                            </div> -->
                        </div>
                        <div>
                            <a href="moviedetail.php?detail=<?php echo $GETmovie['id']; ?>"><img class="card-img  "
                                    src="<?php echo $GETmovie['image']; ?>" alt=""></a>
                        </div>
                        <div class="text-center">
                            <div class="movie-name text-white  ">
                                <h2 class="capitalize">
                                    <?php echo $GETmovie['title']; ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
             }
             ?>
            </div>


        </div>
    </section>
    <section class="small pt-lg-5 pt-3">
        <div class=" ">
            <div class="d-flex justify-content-between">
                <h5 class="text-light">Latest Series to Watch</h5>
               <a href="series.php?series=Series"><p class="pointer fs-7">Explore More<i class="fa-solid fa-arrow-right-long ps-2"></i></p></a>
            </div>
            <div class="slider-single">
                <?php 
                if(isset($_GET['series'])){
                    $movie = mysqli_query($con, "select * from movie where category='".$_GET['series']."'");
                }
                else
                {
                    $movie = mysqli_query($con, "select * from movie");
                }
               
                     foreach ($movie as $GETmovie) { ?>
                <div class="card-main ">
                    <div class="cards ">
                        <div class="d-flex">
                            <!-- <div class="ratings">
                                <i class="fa-solid fa-star"></i> 5.1
                            </div> -->
                        </div>
                        <div>
                            <a href="moviedetail.php?detail=<?php echo $GETmovie['id']; ?>"><img class="card-img  "
                                    src="<?php echo $GETmovie['image']; ?>" alt=""></a>
                        </div>
                        <div class="text-center">
                            <div class="movie-name text-white  ">
                                <h2 class="capitalize">
                                    <?php echo $GETmovie['title']; ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
             }
             ?>
            </div>


        </div>
    </section>
   
</div>



<section class="small pt-lg-5 pt-3">
    <div class="container">
        <div class="slider-small">
            <div class="card-small">
                <div class="cards">
                    <div class="pe-3">
                        <img src="assets/images/small-1.png" class="small-img" alt="">
                    </div>
                </div>
            </div>
            <div class="card-small">
                <div class="cards">
                    <div class="pe-3">
                        <img src="assets/images/small-2.png" class="small-img" alt="">
                    </div>
                </div>
            </div>
            <div class="card-small">
                <div class="cards">
                    <div class="pe-3">
                        <img src="assets/images/small-1.png" class="small-img" alt="">
                    </div>
                </div>
            </div>
            <div class="card-small">
                <div class="cards">
                    <div class="pe-3">
                        <img src="assets/images/small-2.png" class="small-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section>
    <div class="container pt-5">
        <div class="text-light">
        <div class="d-flex justify-content-between">
                <h5 class="text-light">Latest Drama to Watch</h5>
               <a href="series.php?series=Drama"><p class="pointer fs-7">Explore More<i class="fa-solid fa-arrow-right-long ps-2"></i></p></a>
            </div>
        </div>
        <div class="row mx-0">
            <div class="slider-single ">
                <div class="card-main2 card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/Card/Portrait.png" class="card-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/Card/Portrait2.png" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/Card/portrait3.png" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/Card/portrait4.png" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main2 card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/Card/Portrait.png" class="card-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/Card/Portrait2.png" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/Card/portrait3.png" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/Card/portrait4.png" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main2 card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/Card/Portrait.png" class="card-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/Card/Portrait2.png" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/Card/portrait3.png" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/Card/portrait4.png" class="card-img  " alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container pt-5">
        <div class="text-light d-flex justify-content-between">
            <h5>New Added</h5>
            <p class="pointer fs-7">Explore More<i class="fa-solid fa-arrow-right-long ps-2"></i></p>
        </div>
        <div class="row mx-0">
            <div class="slider-single ">
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/cardposter-01.jpg" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/cardposter-02.jpg" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/cardposter-03.webp" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/cardposter-04.jpg" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/cardposter-05.jpg" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/cardposter-01.jpg" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/cardposter-02.jpg" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/cardposter-03.webp" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/cardposter-04.jpg" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
                <div class="card-main ">
                    <div class="cards ">
                        <div>
                            <img src="assets/images/cardposter-05.jpg" class="card-img  " alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php'
?>