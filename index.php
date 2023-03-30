<?php
include('./dbConnection.php');
include('./mainElement/header.php');
?>

<!-- Video Background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="video/banvid.mp4">
        </video>
        <div class="vid-overlay">

        </div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to Indeed Learning</h1>
        <small class="my-content">Learn and Implement</small><br>
        <?php
        if (!isset($_SESSION['is_login'])) {
            echo '
                <a href="#" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#stuRegModel">Get Started</a>
                ';
        } else {
            echo '
                <a href="./Student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>
                ';
        }
        ?>

    </div>
</div>

<!-- Banner -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open me-3"></i>100+ Online Courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users me-3"></i>Expert Instructors</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard me-3"></i>Lifetime Access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-dollar-sign me-3"></i>Money Back Guarantee</h5>
        </div>

    </div>

</div>
<!-- Ceck Dard 1 -->
<div class="container mt-5">
    <h1 class="text-center">Popular Course</h1>
    <div class="card-group mt-4">
        <?php
        $sql = "SELECT * FROM course LIMIT 3";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $course_id = $row['course_id'];
                echo '
                    <a href="courseDetails.php?course_id=' . $course_id . '" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
                    <div class="card">
                        <img src="' . str_replace('..', '.', $row['course_img']) . '" class="card-img-top" alt="Guitar">
                        <div class="card-body">
                            <h5 class="card-title">' . $row['course_name'] . '</h5>
                            <p class="card-text">' . $row['course_descr'] . '</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: <small><del>&#8377 ' . $row['course_original_price'] . '</del></small>
                                <span class="font-weight-bolder">&#8377 ' . $row['course_price'] . '</span>
                            </p>
                            <a class="btn btn-primary text-white font-weight-bolder float-end" href="courseDetails.php?course_id=' . $course_id . '">Enroll</a>
                        </div>
                    </div>
                </a>
                    ';
            }
        }
        ?>

    </div>
    <!-- Card deck 2 -->
    <div class="card-group mt-4">
        <?php
        $sql = "SELECT * FROM course LIMIT 3,3";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $course_id = $row['course_id'];
                echo '
                    <a href="courseDetails.php?course_id=' . $course_id . '" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
                    <div class="card">
                        <img src="' . str_replace('..', '.', $row['course_img']) . '" class="card-img-top" alt="Guitar">
                        <div class="card-body">
                            <h5 class="card-title">' . $row['course_name'] . '</h5>
                            <p class="card-text">' . $row['course_descr'] . '</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: <small><del>&#8377 ' . $row['course_original_price'] . '</del></small>
                                <span class="font-weight-bolder">&#8377 ' . $row['course_price'] . '</span>
                            </p>
                            <a class="btn btn-primary text-white font-weight-bolder float-end" href="courseDetails.php?course_id=' . $course_id . '">Enroll</a>
                        </div>
                    </div>
                </a>
                    ';
            }
        }
        ?>

    </div>
    <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="courses.php">View All Course</a>
    </div>
</div>
<!-- Contact Us -->
<?php
include('./contact.php');
?>

<!-- Testimonial slide -->
<section class="testimonial-container">
    <div class="testimonial mySwiper">
        <div class="testi-content swiper-wrapper">
            <?php
            $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $s_img = $row['stu_img'];
                    $n_img = str_replace('..', '.', $s_img);
               
            ?>
            <div class="slide swiper-slide">
                <img src="<?php echo $n_img ?>" alt="" class="image" />
                <p>
                   <?php echo $row['f_content']; ?>
                </p>

                <i class="bx bxs-quote-alt-left quote-icon"></i>

                <div class="details">
                    <span class="name"><?php echo $row['stu_name']; ?></span>
                    <span class="job"><?php echo $row['stu_occ']; ?></span>
                </div>
            </div>
            <?php
             }
            } 
            ?>
            
        </div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- Social Media section -->
<div class="container-fluid bg-danger">
    <div class="row text-center p-1">
        <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-facebook-f"></i>Facebook</a>
        </div>
        <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-twitter"></i>Twitter</a>
        </div>
        <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-whatsapp"></i>Whatsapp</a>
        </div>
        <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-instagram"></i>Instagram</a>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="container-fluid p-4" style="background-color: #E9ECEF;">
    <div class="container" style="background-color: #E9ECEF;">
        <div class="row text-center">
            <div class="col-sm">
                <h5>About Us</h5>
                <p>hfuwdh sdishd sdh sdosjkd dqwo wefjwoe wokw wkqwpj wkdwodw wdwkd wldkw
                    wdwid wqkdjw wdisdow rri l3th3ui oweifjk wefjwiwfn
                    efjhwuiwednf eif dj eifsk 3orfo
                </p>
            </div>
            <div class="col-sm">
                <h5>Category</h5>
                <a href="#" class="text-dark">Web Development</a><br>
                <a href="#" class="text-dark">Web Designing</a><br>
                <a href="#" class="text-dark">App Development</a><br>
                <a href="#" class="text-dark">IOS Development</a><br>
                <a href="#" class="text-dark">Data Analysis</a><br>
            </div>
            <div class="col-sm">
                <h5>Contact Us</h5>
                <p>indeed Edu Ltd <br> Near Paragaon <br>Collage Road <br>Phn. 01666666</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<?php
include('./mainElement/footer.php');
?>