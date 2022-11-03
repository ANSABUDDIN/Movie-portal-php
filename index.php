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

<!-- ads banner -->
<section class="small pt-lg-5 pt-3">
    <div class="container">
        <div class="slider-small">
            <?php 
                    $ads = mysqli_query($con, "select * from ads where category= 'main-banner'");
              
               
                     foreach ($ads as $GETads) { ?>
            <div class="card-small">
                <div class="cards">
                    <div class="pe-3">
                        <img src="<?php echo $GETads['image'];?>" class="small-img" alt="">
                    </div>
                </div>
            </div>
            <?php
             }
             ?>


        </div>
    </div>
</section>
<!-- ads banner -->

<!-- movie sec -->
<section class="small pt-lg-5 pt-3">
    <div class="container ">
        <div class="d-flex justify-content-between">
            <h5 class="text-light">Latest Movies to Watch</h5>
            <a href="series.php?series=Movie">
                <p class="pointer fs-7">Explore More<i class="fa-solid fa-arrow-right-long ps-2"></i></p>
            </a>
        </div>
        <div class="slider-single">
            <?php 
             
                    $movie = mysqli_query($con, "select * from movie where category = 'Movie' ");
               
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
<!-- movie sec -->

<!-- ads banner -->
<section class="small pt-lg-5 pt-3">
    <div class="container">
        <div class="slider-small">
            <?php 
                    $ads = mysqli_query($con, "select * from ads where category= 'main-banner'");
              
               
                     foreach ($ads as $GETads) { ?>
            <div class="card-small">
                <div class="cards">
                    <div class="pe-3">
                        <img src="<?php echo $GETads['image'];?>" class="small-img" alt="">
                    </div>
                </div>
            </div>
            <?php
             }
             ?>


        </div>
    </div>
</section>
<!-- ads banner -->
<!-- series sec -->

<section class="small pt-lg-5 pt-3">
    <div class=" container ">
        <div class="d-flex justify-content-between">
            <h5 class="text-light">Latest Series to Watch</h5>
            <a href="series.php?series=Series">
                <p class="pointer fs-7">Explore More<i class="fa-solid fa-arrow-right-long ps-2"></i></p>
            </a>
        </div>
        <div class="slider-single">
            <?php 
            
                    $movie = mysqli_query($con, "select * from series ");
               
                     foreach ($movie as $GETmovie) { ?>
            <div class="card-main ">
                <div class="cards ">
                    <div class="d-flex">
                        <!-- <div class="ratings">
                                <i class="fa-solid fa-star"></i> 5.1
                            </div> -->
                    </div>
                    <div>
                        <a href="seriesdetail.php?series=<?php echo $GETmovie['id']; ?>&season=1"><img class="card-img  "
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
<!-- series sec -->


<!-- ads -->
<!-- drama sec -->
<section class="small pt-lg-5 pt-3">
    <div class="container">
        <div class="slider-small">
            <?php 
                    $ads = mysqli_query($con, "select * from ads where category= 'main-banner'");
                     foreach ($ads as $GETads) { ?>
            <div class="card-small">
                <div class="cards">
                    <div class="pe-3">
                        <img src="<?php echo $GETads['image'];?>" class="small-img" alt="">
                    </div>
                </div>
            </div>
            <?php
             }
             ?>


        </div>
    </div>
</section>
<!-- drama sec -->
<!-- ads -->
    <section class="small pt-lg-5 pt-3">
        <div class=" container ">
            <div class="d-flex justify-content-between">
                <h5 class="text-light">Latest Drama to Watch</h5>
                <a href="series.php?series=Series">
                    <p class="pointer fs-7">Explore More<i class="fa-solid fa-arrow-right-long ps-2"></i></p>
                </a>
            </div>
            <div class="slider-single">
                <?php 
                
                        $movie = mysqli_query($con, "select * from movie where category = 'Drama' ");
                
                   
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
<!-- ads -->
<section class="small pt-lg-5 pt-3">
    <div class="container">
        <div class="slider-small">
            <?php 
                    $ads = mysqli_query($con, "select * from ads where category= 'main-banner'");
                     foreach ($ads as $GETads) { ?>
            <div class="card-small">
                <div class="cards">
                    <div class="pe-3">
                        <img src="<?php echo $GETads['image'];?>" class="small-img" alt="">
                    </div>
                </div>
            </div>
            <?php
             }
             ?>


        </div>
    </div>
</section>
<!-- ads -->
    <!-- <div class="container pt-5">
        <div class="text-light">
            <div class="d-flex justify-content-between">
                <h5 class="text-light">Latest Drama to Watch</h5>
                <a href="series.php?series=Drama">
                    <p class="pointer fs-7">Explore More<i class="fa-solid fa-arrow-right-long ps-2"></i></p>
                </a>
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
    </div> -->
<!-- drama sec -->


<!-- all category sec -->
<section class="pt-5">
    <div class="container ">
        <div class="d-flex justify-content-between">
            <h5 class="text-light">New Addes Series to Watch</h5>
            <a href="series.php?series">
                <p class="pointer fs-7">Explore More<i class="fa-solid fa-arrow-right-long ps-2"></i></p>
            </a>
        </div>
        <div class="slider-single">
            <?php 
            
                    $movie = mysqli_query($con, "select * from movie ");
            
               
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
<!-- all category sec -->

<!-- ads -->
<section class="small pt-lg-5 pt-3">
    <div class="container">
        <div class="slider-small">
            <?php 
                    $ads = mysqli_query($con, "select * from ads where category= 'main-banner'");
                     foreach ($ads as $GETads) { ?>
            <div class="card-small">
                <div class="cards">
                    <div class="pe-3">
                        <img src="<?php echo $GETads['image'];?>" class="small-img" alt="">
                    </div>
                </div>
            </div>
            <?php
             }
             ?>


        </div>
    </div>
</section>
<!-- ads -->

<?php
include 'footer.php'
?>