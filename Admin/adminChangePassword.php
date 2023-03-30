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
$adminEmail = $_SESSION['adminLogEmail'];
if (isset($_REQUEST['adminPassUpdatebtn'])) {
    if (     
            ($_REQUEST['adminPass'] == "")
    ) {
        $msg = '<div class="alert alert-danger col-sm-6 ms-5 mt-2" role="alert">Please Fill All Fields!</div>';
    } else {

        $sql = "SELECT * FROM admin WHERE admin_email = '$adminEmail'";
        $result = $conn->query($sql);

        if($result->num_rows == 1){
            $adminPass = $_REQUEST['adminPass'];
            $sql = "UPDATE admin SET admin_pass ='$adminPass' WHERE admin_email ='$adminEmail'  ";
            if ($conn->query($sql) == TRUE) {
                $msg = '<div class="alert alert-success col-sm-6 ms-5 mt-2" role="alert">Updated Successfully!</div>';
            } else {
                $msg = '<div class="alert alert-danger col-sm-6 ms-5 mt-2" role="alert">Unable to Update</div>';
            }
        }


    }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Change Password</h3>
    <form action="" method="POST" enctype="multipart/form-data">
       
        <div class="mb-3">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" value="<?php
            echo $adminEmail
            ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="inputnewpassword" class="form-label">New Password</label><br>
            <input type="text" class=" form-control" id="inputnewpassword" name="adminPass" placeholder="New Password" >
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="adminPassUpdatebtn" name="adminPassUpdatebtn">Update</button>
            <a href="./courses.php" class="btn btn-secondary">Close</a>
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