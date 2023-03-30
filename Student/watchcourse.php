<?php
if (!isset($_SESSION)) {
    session_start();
}
// include('../Admin/adminInclude/header.php');
include('../dbConnection.php');

if (isset($_SESSION['is_login'])) {
    $stuEmail = $_SESSION['stuLogEmail'];
} else {
    echo "<script>location.href='../loginorsignup.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Course</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- <div class=" container-fluid bg-success p-2">
        <h3>Welcome to Elearning</h3>
        <a href="./studentProfile.php" class="btn btn-danger">My Courses</a>
    </div> -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow py-2" style="background-color: #225470;">
        <a href="../index.php" class="navbar-brand col-sm-3 col-md-2 me-0 ms-3">Indeed Learning <small
                class="text-white">
                Admin Area
            </small></a>
    </nav>

    <div class="container-fluid mb-5" style="margin-top: 90px;">
        <div class="row">
            <div class=" col-sm-3 border-end">
                <h4 class=" text-center">Lessons</h4>
                <ul id="playlist" class=" nav flex-column">
                    <?php
                    if (isset($_GET['course_id'])) {
                        $course_id = $_GET['course_id'];
                        $sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '
                                <li class="nav-item border-bottom py-2" style=" cursor: pointer;" movieurl=' . $row['lesson_link'] . '>' . $row['lesson_name'] . '</li>
                                ';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class=" col-sm-8">
                <video src="" id="videoarea" class=" mt-5 w-75 me-2" controls></video>
            </div>
        </div>
    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/adminAjazRequest.js"></script>
    <script src="../js/custom.js"></script>

</body>

</html>