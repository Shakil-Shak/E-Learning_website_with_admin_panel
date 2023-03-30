<footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copuright &copy; 2022 || Designed bt Shakil Sheikh || <a href="#" data-bs-toggle="modal" data-bs-target="#AdminLoginModel">Admin Login</a></small>
    </footer>

    <!-- Regestration Form -->
<?php include("studentRegistration.php"); ?>
 
<!-- Login -->
   <div class="modal fade" id="stuLoginModel" tabindex="-1" aria-labelledby="stuLoginModel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="stuLoginModel">Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="stuLoginForm">
               
                <div class="mb-3">
                    <i class="fas fa-envelope"></i><label for="StuLogemail" class="form-label ps-2 font-weight-bold">E-mail</label>
                    <input type="email" class="form-control" placeholder="Email" name="StuLogemail" id="StuLogemail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <i class="fas fa-key"></i><label for="StuLogpass" class="form-label ps-2 font-weight-bold">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="StuLogpass" id="StuLogpass">
                </div>
                
                
              </form>
        </div>
        <div class="modal-footer">
        <span id="statusLogMsg"></span>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
          <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Admin Login -->
  <div class="modal fade" id="AdminLoginModel" tabindex="-1" aria-labelledby="AdminLoginModel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="AdminLoginModel">Admin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="AdminLoginForm">
               
                <div class="mb-3">
                    <i class="fas fa-envelope"></i><label for="AdminLogemail" class="form-label ps-2 font-weight-bold">E-mail</label>
                    <input type="email" class="form-control" placeholder="Email" name="AdminLogemail" id="AdminLogemail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <i class="fas fa-key"></i><label for="AdminLogpass" class="form-label ps-2 font-weight-bold">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="AdminLogpass" id="AdminLogpass">
                </div>
                
                
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
          <button type="button" class="btn btn-primary" id="AdminLoginBtn" onclick="checkAdminLogin()">Login</button>
        </div>
      </div>
    </div>
  </div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/testimonial_script.js"></script>

    <!-- Student Ajax call -->
    <script src="js/ajaxrequest.js"></script>

    <!-- Admin Ajax call -->
    <script src="js/adminAjazRequest.js"></script>
</body>

</html>