<?php
if (!isset($_SESSION)) {
    session_start();
}
include('./stuInclude/header.php');
include('../dbConnection.php');

if (isset($_SESSION['is_login'])) {
    $stuEmail = $_SESSION['stuLogEmail'];
} else {
    echo "<script>location.href='../index.php'</script>";
}
if (isset($_REQUEST['stuPassUpdatebtn'])) {
    if (     
            ($_REQUEST['stuNewPass'] == "")
    ) {
        $msg = '<div class="alert alert-danger col-sm-6 ms-5 mt-2" role="alert">Please Fill All Fields!</div>';
    } else {

        $sql = "SELECT * FROM student WHERE stu_email = '$stuEmail'";
        $result = $conn->query($sql);

        if($result->num_rows == 1){
            $stuPass = $_REQUEST['stuNewPass'];
            $sql = "UPDATE student SET stu_pass ='$stuPass' WHERE stu_email ='$stuEmail'  ";
            if ($conn->query($sql) == TRUE) {
                $msg = '<div class="alert alert-success col-sm-6 ms-5 mt-2" role="alert">Updated Successfully!</div>';
            } else {
                $msg = '<div class="alert alert-danger col-sm-6 ms-5 mt-2" role="alert">Unable to Update</div>';
            }
        }


    }
}
?>

<div class="col-sm-6 mt-5 mx-3">
    <form action="" method="POST" enctype="multipart/form-data">
       
        <div class="mb-3">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" value="<?php
            echo $stuEmail
            ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="inputnewpassword" class="form-label">New Password</label><br>
            <input type="password" class=" form-control" id="inputnewpassword" name="stuNewPass" placeholder="New Password" >
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary me-4 mt-4" id="stuPassUpdatebtn" name="stuPassUpdatebtn">Update</button>
            <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        </div>
        <?php
        if(isset($msg)){
            echo $msg;
        }
        ?>
    </form>
</div>

<?php
include('../Admin/adminInclude/footer.php');
?>