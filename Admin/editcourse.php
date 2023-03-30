<?php
if (!isset($_SESSION)) {
    session_start();
}
include('../Admin/adminInclude/header.php');
include('../dbConnection.php');

if (isset($_SESSION['is_admin_login'])) {
    $adminEmail = $_SESSION['adminLogEmail'];
} else {
    echo "<script>location.href='../index.php'</script>";
}

if (isset($_REQUEST['requpdate'])) {
    if (
        ($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author'] == "") ||
        ($_REQUEST['course_duration'] == "") || ($_REQUEST['course_price'] == "") || ($_REQUEST['course_original_price'] == "")
    ) {
        $msg = '<div class="alert alert-danger col-sm-6 ms-5 mt-2" role="alert">Please Fill All Fields!</div>';
    } else {
        $cid = $_REQUEST['course_id'];
        $cname = $_REQUEST['course_name'];
        $cdesc = $_REQUEST['course_desc'];
        $cauthor = $_REQUEST['course_author'];
        $cduration = $_REQUEST['course_duration'];
        $cprice = $_REQUEST['course_price'];
        $coriginalprice = $_REQUEST['course_original_price'];
        $cimg = '../image/courseimg/' . $_FILES['course_img']['name'];
        // $course_image_temp =  $_FILES['course_img']['tmp_name'];
        // $img_folder = '../image/courseimg/'.$course_image;
        // move_uploaded_file($course_image_temp, $img_folder);

        $sql = "UPDATE course SET course_id ='$cid', course_name = '$cname', course_descr ='$cdesc', course_author ='$cauthor', course_img ='$cimg',
        course_duration ='$cduration', course_price='$cprice', course_original_price='$coriginalprice'
        WHERE course_id ='$cid'  ";

        if ($conn->query($sql) == TRUE) {
            $msg = '<div class="alert alert-success col-sm-6 ms-5 mt-2" role="alert">Updated Successfully!</div>';
        } else {
            $msg = '<div class="alert alert-danger col-sm-6 ms-5 mt-2" role="alert">Unable to Update</div>';
        }

    }
}

?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Course</h3>
    <?php
    if (isset($_REQUEST['view'])) {
        $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['id']}";
        $reslut = $conn->query($sql);
        $row = $reslut->fetch_assoc();
    }

    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php
            if (isset($row['course_id'])) {
                echo $row['course_id'];
            }
            ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php
            if (isset($row['course_name'])) {
                echo $row['course_name'];
            }
            ?>">
        </div>
        <div class="mb-3">
            <label for="course_desc">Course Description</label>
            <textarea class="form-control" id="course_desc" name="course_desc" rows="2"><?php if (isset($row['course_descr'])) {
                echo $row['course_descr'];
            } ?></textarea>
        </div>
        <div class="mb-3">
            <label for="course_author">Author</label>
            <input type="text" class="form-control" id="course_author" name="course_author" value="<?php
            if (isset($row['course_author'])) {
                echo $row['course_author'];
            }
            ?>">
        </div>
        <div class="mb-3">
            <label for="course_duration">Course Duration</label>
            <input type="text" class="form-control" id="course_duration" name="course_duration" value="<?php
            if (isset($row['course_duration'])) {
                echo $row['course_duration'];
            }
            ?>">
        </div>
        <div class="mb-3">
            <label for="course_original_price">Course Original Price</label>
            <input type="text" class="form-control" id="course_original_price" name="course_original_price" value="<?php
            if (isset($row['course_original_price'])) {
                echo $row['course_original_price'];
            }
            ?>">
        </div>
        <div class="mb-3">
            <label for="course_price">Course Selling Price</label>
            <input type="text" class="form-control" id="course_price" name="course_price" value="<?php
            if (isset($row['course_price'])) {
                echo $row['course_price'];
            }
            ?>">
        </div>
        <div class="mb-3">
            <label for="course_img" class="form-label">Course Image</label><br>
            <img src="<?php
            if (isset($row['course_img'])) {
                echo $row['course_img'];
            }
            ?>" alt="" class="img-thumbnail">
            <input type="file" class=" form-control" id="course_img" name="course_img">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="./courses.php" class="btn btn-secondary">Close</a>
        </div>
        <?php
        if (isset($msg)) {
            echo $msg;
        }
        ?>
    </form>
</div>

<?php
include('../Admin/adminInclude/footer.php');
?>