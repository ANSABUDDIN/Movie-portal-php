<?php
include 'header.php';
include 'config.php';
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
                <?php if(isset($_GET['series']))
                    {
                        $movie_category=$_GET['series'];
                        $movie = mysqli_query($con, "SELECT * FROM `movie` where category = '$movie_category'");
                        foreach($movie as $movie_detail){ 
                            $title=$movie_detail['title'];
                            $image=$movie_detail['image'];
                            $id=$movie_detail['id'];
                            ?>
                        <div class="col-lg-2 col-6 my-4 ">
                            <div class="cards ">
                                <!-- <div class="d-flex">
                                    <div class="ratings">
                                        <i class="fa-solid fa-star"></i> 5.1
                                    </div>
                                </div> -->
                                <div>
                                    <a href="moviedetail.php?detail=<?php echo $id; ?>"><img src="<?php echo $image; ?>"
                                            class="card-img  " alt=""></a>
                                </div>
                                <div class="text-center">
                                    <div class="movie-name text-white  ">
                                    <?php echo $title; ?>
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
    include 'footer.php'
    ?>