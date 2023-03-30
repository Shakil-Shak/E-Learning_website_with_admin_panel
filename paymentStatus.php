<!-- Header -->
<?php
include('./mainElement/header.php');
?>

<!-- Course Page -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/courseimg/paymentBanner.jpg" alt="Courses" style="height: 600px; width: 100%; object-fit: cover; box-shadow: 10px;">
    </div>
</div>

<!-- Payment Form -->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Order ID: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control mx-3">
            </div>
            <div class="col-sm center">
                <input type="submit" value="View" class="btn btn-primary mt-4">
            </div>
        </div>
    </form>
</div>

<!-- Contact -->
<?php
include('./contact.php');
?>

<!-- Footer -->
<?php
include('./mainElement/footer.php');
?>