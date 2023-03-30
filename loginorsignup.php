<?php


include('./dbConnection.php');
include('./mainElement/header.php');
?>

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/courseimg/courseBanner.jpg" alt="Courses" style="height: 600px; width: 100%; object-fit: cover; box-shadow: 10px;">
    </div>
</div>

<div class="container jumbotron mb-5 mt-5">
    <div class=" row">
        <div class="col-md-4">
            <h5 class="mb-3">If Already Registered !! Login</h5>
            
            <form role=" form" id="stuLoginForm">
            <div class="mb-3">
                    <i class="fas fa-envelope"></i><label for="stuLogEmail" class="ps-2 fw-bold">E-mail</label>
                    <small id="statusLogMsg1"></small>
                    <input type="email" class="form-control" placeholder="Email" name="stuLogEmail" id="stuLogEmail">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <i class="fas fa-key"></i><label for="stuLogPass" class="ps-2 fw-bold">Password</label>
                    <!-- <small id="statusLogMsg1"></small> -->
                    <input type="password" class="form-control" placeholder="Password" name="stuLogPass" id="stuLogPass">
                </div>
                <button type="button" id="stuLoginBtn" class="btn btn-primary" onclick="checkStuLogin()">Login</button>
            </form><br>
            <small id="statusLogMsg"></small>
        </div>
        <div class=" col-md-6 offset-md-1">
            <h5 class=" mb-3">New User !! Sign Up</h5>
            
            <form role=" form" id="stuRegForm">
            <div class="mb-3">
                    <i class="fas fa-user"></i><label for="stuname" class="ps-2 fw-bold">Name</label>
                    <small id="statusMsg1"></small>
                    <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
                    
                  </div>
                  <div class="mb-3">
                    <i class="fas fa-envelope"></i><label for="stuemail" class="ps-2 fw-bold">E-mail</label>
                    <small id="statusMsg2"></small>
                    <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <i class="fas fa-key"></i><label for="stupass" class="ps-2 fw-bold">New Password</label>
                    <small id="statusMsg3"></small>
                    <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
                </div>
                <button type="button" id="signup" class="btn btn-primary" onclick="addStu()">Sign UP</button>
            </form><br>
            <small id="statusLogMsg"></small>
        </div>

    </div>
</div>

<!-- Contact -->
<?php
include('./contact.php');
?>

<!-- Footer -->
<?php
include('./mainElement/footer.php');
?>