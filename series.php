<?php
include 'header.php';
include 'config.php';

if(isset($_GET['series'])){


?>







<section class="pt-5">
    <div class="container">
        <div class=" d-flex justify-content-center align-items-center">
            <div class="line-div position-r">
                <h1 class="text-white text-uppercase"><?php echo $_GET['series']; ?></h1>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container pt-5">
        <div class="mx-0">
            <div class="row flex-warp">
                <?php
               
                    if ($_GET['series'] == "Movie") {
                        if(isset($_GET['category'])){
                            $movie = mysqli_query($con, "SELECT * FROM `movie` where genre='".$_GET['category']."'");
                        }elseif(isset($_GET['year'])){
                            $movie = mysqli_query($con, "SELECT * FROM `movie` where release_year='".$_GET['year']."'");
                        }elseif(isset($_GET['country'])){
                            $movie = mysqli_query($con, "SELECT * FROM `movie` where country='".$_GET['country']."'");
                        }else{
                            $movie = mysqli_query($con, "SELECT * FROM `movie`");
                        }
                        
                        foreach ($movie as $movie_detail)
                        {
                            $title = $movie_detail['title'];
                            $image = $movie_detail['image'];
                            $id = $movie_detail['id'];
                    ?>
                            <div class="col-lg-2 col-6 my-4 ">
                                <div class="cards ">
                                    <div class="d-flex">
                                        <!-- <div class="ratings">
                                            <i class="fa-solid fa-star"></i> 5.1
                                        </div> -->
                                    </div>
                                    <div>
                                        <a href="moviedetail.php?detail=<?php echo $id; ?>"><img src="<?php echo $image; ?>" class="card-img  my-card-height " alt=""></a>
                                    </div>
                                    <div class="text-center">
                                        <div class="movie-name text-white  ">
                                            <h2 class="capitalize">
                                                <?php echo $title ?>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php

                        }
                    }
                    if($_GET['series'] == "series") {
                        $series = mysqli_query($con, "SELECT * FROM `series` ");
                        foreach ($series as $series_detail) {
                            $series_title = $series_detail['title'];
                            $series_image = $series_detail['image'];
                            $Series_id = $series_detail['id'];
                        ?>
                            <div class="col-lg-2 col-6 my-4 ">
                                <div class="cards ">
                                    <!-- <div class="d-flex">
                                        <div class="ratings">
                                            <i class="fa-solid fa-star"></i> 5.1
                                        </div>
                                    </div> -->
                                    <div>
                                        <a href="moviedetail.php?detail=<?php echo $Series_id; ?>"><img src="<?php echo $series_image; ?>" class="card-img my-card-height   " alt=""></a>
                                    </div>
                                    <div class="text-center">
                                        <div class="movie-name text-white  ">
                                            <h2 class="capitalize">
                                                <?php echo $series_title; ?>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                
                ?>



            </div>
        </div>
    </div>
</section>





<?php
}else
{
    echo "Page not found";
}
include 'footer.php'
?>