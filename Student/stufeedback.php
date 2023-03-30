<?php
if (!isset($_SESSION)) {
    session_start();
}
include('./stuInclude/header.php');
include_once('../dbConnection.php');

if (isset($_SESSION['is_login'])) {
    $stuEmail = $_SESSION['stuLogEmail'];
} else {
    echo "<script>location.href = '../index.php';</script>";
}

$sql = "SELECT * FROM student WHERE stu_email = '$stuEmail'";
$result = $conn->query($sql);

if ($result -> num_rows == 1) {
    $row = $result->fetch_assoc();
    $stuId = $row["stu_id"];
   
}

if (isset($_REQUEST['submitFeedbackBtn'])) {
    if (
        (
            ($_REQUEST['f_content'] == ""))
    ) {
        $msg = '<div class="alert alert-danger col-sm-6 ms-5 mt-2" role="alert">Please Fill All Fields!</div>';
    } else {
        $fcontent = $_REQUEST['f_content'];


        $sql = "INSERT INTO feedback (f_content ,stu_id) VALUES ('$fcontent','$stuId')";

        if ($conn->query($sql) == TRUE) {
            $msg = '<div class="alert alert-success col-sm-6 ms-5 mt-2" role="alert">Submited Successfully!</div>';
        } else {
            $msg = '<div class="alert alert-danger col-sm-6 ms-5 mt-2" role="alert">Unable to Submit</div>';
        }

    }
}
?>
<div class="col-sm-6 mt-5 mx-3">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="stuId">Student ID</label>
            <input type="text" class="form-control" id="stuId" name="stuId" value="<?php if (isset($stuId)) {
                echo $stuId;} ?>">
        </div>
        <div class="mb-3">
            <label for="f_content">Write Feedback</label>
            <textarea class="form-control" id="f_content" name="f_content" rows="2"></textarea>
        </div>
        

        <div class="text-center">
            <button type="submit" class="btn btn-primary" id="submitFeedbackBtn" name="submitFeedbackBtn">Submit</button>
        </div>
        <?php
        if (isset($msg)) {
            echo $msg;
        }
        ?>
    </form>
</div>

<?php 
include('./stuInclude/footer.php');

?>