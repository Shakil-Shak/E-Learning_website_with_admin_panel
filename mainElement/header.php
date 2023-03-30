<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/testimonial.css" />

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <title>Indeed Learning</title>
</head>

<body>

    <!-- -Top Navigtion- -->
    <nav class="navbar navbar-expand-sm navbar-dark ps-5 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Indeed Learning</a>
            <span class="navbar-text">Your gateway to success</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav custom-nav ps-5">
                    <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>                                               
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
                    <?php
                    session_start();
                    if(isset($_SESSION['is_login'])){
                        echo '
                        <li class="nav-item custom-nav-item"><a href="./Student/studentProfile.php" class="nav-link">My Profile</a></li>
                        <li class="nav-item custom-nav-item"><a href="paymentStatus.php" class="nav-link">Payment Status</a></li>
                        <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                        ';
                    }else{
                        echo '
                        <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModel">Logoin</a></li>
                        <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModel">Signup</a></li>
                        ';
                    }
                    ?>
                    
                </ul>
            </div>
        </div>
    </nav>