<?php
include 'header.php';
include 'config.php';

?>




<section>
    <div class="container pt-5">
        <div class="row mx-0 align-items-start">
            <div class="col-12 p-3  col-lg-3 mt-lg-4 filter-side">
                <div>
                    <div class="text-center">
                        <h4 class="text-white">Filter Movie </h4>

                    </div>
                    <form method="get">

                        <div class="pt-3 flex-column d-flex ">
                            <h5 class="text-light fs-6">
                                Movie Name
                            </h5>
                            <div>
                                <input type="text" value="" name="title" placeholder="Movie Name" class="input-filter form-control bg-transparent text-danger">
                            </div>
                        </div>
                        <div class="pt-3 flex-column d-flex ">
                            <h5 class="text-light fs-6">
                                Category
                            </h5>
                            <select name="category" id="" class=" form-control bg-transparent text-danger">
                                <option disabled selected>
                                    Select any option
                                </option>
                                <?php
                                $sql ="SELECT  DISTINCT category FROM `movie`";
                                $category = mysqli_query($con,$sql);
                                foreach ($category as $GETcategory){?>
                                    <option value="<?php echo $GETcategory['category']; ?>">
                                        <?php echo $GETcategory['category']; ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="pt-3 text-center">
                            <button type="submit" class="btn-gray-1 px-3 ">Search</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-9 ps-lg-3 col-12 pt-lg-0 pt-5">
                <div class="row" id="result">
                    <?php
                    $title = "";
                    if (isset($_GET['title'])  && $_GET['category'] == "") {
                        $title = "where `title` LIKE '%" . $_GET['title'] . "%'";
                    }
                    $category = "";
                    if (isset($_GET['category']) && $_GET['title'] == "") {
                        $category = "where `category`='" . $_GET['category'] . "'";
                    }
                    $all = "";
                    if (isset($_GET['title']) && isset($_GET['category'])) {
                        if ($_GET['title'] != "" &&  $_GET['category'] != "") {
                            $all = "where `category`='" . $_GET['category'] . "' && `title` LIKE '%" . $_GET['title'] . "%'";
                        }
                    }
                    $movie = mysqli_query($con, "select * from movie $title $category $all");
                    if (mysqli_num_rows($movie) > 0) {
                        foreach ($movie as $GETmovie) { ?>
                            <div id="card-data" class="col-lg-3 col-6 my-4 ">
                                <div class="cards ">
                                    <div>
                                        <a href="moviedetail.php?detail=<?php echo $GETmovie['id']; ?>"><img src="<?php echo $GETmovie['image']; ?>" class="card-img" alt=""></a>
                                    </div>
                                    <div class="text-center">
                                        <div class="movie-name text-white  ">
                                            <?php echo $GETmovie['title']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div class="text-center mt-5 text-danger">

                            <?php echo "Result Not Found !" ?>
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