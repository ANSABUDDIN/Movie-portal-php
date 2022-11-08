<?php
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <div class="">

            <nav class="navbar fixed-top navbar-expand-lg navbar-light py-3 bg-transparent">
                <div class="container  align-items-center">
                    <div><a class="navbar-brand text-red  fw-bold fs-4" href="index.php">Movie <span class="text-light"> Web</span> </a></div>
                    <div class="d-flex gap-1 align-items-center">
                        <div class="d-lg-none d-flex align-items-center ">
                            <ul class="list-unstyled mb-0   d-flex align-items-center gap-2">
                                <!-- <li>
                                    <a href="searchfilter.php">
                                        <i class="fa-solid fa-magnifying-glass fs-6 icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa-regular fa-bell fs-6 icon"></i>
                                </li> -->
                                <button class="navbar-toggler mt-2  p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon text-light"><i class="fa-solid fa-bars"></i></span>
                                </button>
                                <!-- <li>
                                    <img src="assets/images/logo2.png" class="w-75" alt="">
                                </li> -->
                            </ul>
                        </div>

                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item ms-lg-4">
                                <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown mx-lg-2">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Series
                                </a>
                                <ul class="dropdown-menu p-1" aria-labelledby="navbarDropdown">
                                    <?php
                                    $series = mysqli_query($con, "select * from series  order by id DESC LIMIT 5 ");
                                    foreach ($series as $getseries) { ?>
                                        <li><a class="fs-6 dropdown-item capitalize text-light" href="moviedetail.php?detail=<?php echo $getseries['id']; ?>">

                                                <?php
                                                echo $getseries['title'];
                                                ?>
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                    <div class="my-mini-line"></div>
                                    <li>
                                        <a class="dropdown-item fs-6 text-light" href="moviedetail.php?detail=<?php echo $getseries['id']; ?>">
                                            See More
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown mx-lg-2">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Genere
                                </a>
                                <ul class=" dropdown-menu  p-1" aria-labelledby="navbarDropdown">

                                    <?php
                                    $genre = mysqli_query($con, "select * from genre order by id asc limit 7 ");
                                    foreach ($genre as $getgenre) { ?>
                                        <li><a class="fs-6 capitalize dropdown-item text-light" href="series.php?series=Movie&&category=<?php echo $getgenre['name']; ?>">

                                                <?php
                                                echo $getgenre['name'];
                                                ?>
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                    <div class="my-mini-line"></div>
                                    <li>
                                        <a class="dropdown-item capitalize  fs-6 text-light" href="searchfilter.php">

                                            See More
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown mx-lg-2">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Year
                                </a>
                                <ul class="dropdown-menu p-1" aria-labelledby="navbarDropdown">
                                    <?php
                                    $year = mysqli_query($con, "SELECT  DISTINCT release_year FROM `movie` order by release_year DESC LIMIT 5 ");
                                    foreach ($year as $getyear) { ?>
                                        <li><a class="fs-6 dropdown-item capitalize text-light" href="series.php?series=Movie&&year=<?php echo $getyear['release_year']; ?>">

                                                <?php
                                                echo $getyear['release_year'];
                                                ?>
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                    <div class="my-mini-line"></div>
                                    <li>
                                        <a class="dropdown-item fs-6 text-light" href="searchfilter.php">
                                            See More
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown mx-lg-2">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Country
                                </a>
                                <ul class="dropdown-menu p-1" aria-labelledby="navbarDropdown">
                                    <?php
                                    $country = mysqli_query($con, "select * from country  order by id asc LIMIT 5 ");
                                    foreach ($country as $getcountry) { ?>
                                        <li><a class="fs-6 dropdown-item capitalize text-light" href="series.php?series=Movie&&country=<?php echo $getcountry['nicename']; ?>">

                                                <?php
                                                echo $getcountry['nicename'];
                                                ?>
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                    <div class="my-mini-line"></div>
                                    <li>
                                        <a class="dropdown-item fs-6 text-light" href="searchfilter.php">
                                            See More
                                        </a>
                                    </li>

                                </ul>
                            </li>

                        </ul>

                        <form action="series.php" get>
                            <div class=" search-div">
                                <input class="form-control my-input me-2 bg-transperent" name="search" type="search" placeholder="Search" aria-label="text">
                                <button class="" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>


                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- <div class="d-lg-flex d-none justify-content-end">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center gap-3">
                                <li>
                                    <a href="searchfilter.php">
                                        <i class="fa-solid fa-magnifying-glass fs-5 icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa-regular fa-bell fs-5 icon"></i>
                                </li>
                                <li>
                                    <img src="assets/images/logo2.png" class="w-75" alt="">
                                </li>
                            </ul>
                        </div> -->