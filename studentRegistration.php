 <!-- Regestration Form -->

  <!-- Modal -->
  <div class="modal fade" id="stuRegModel" tabindex="-1" aria-labelledby="stuRegModel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="stuRegModel">Regestration</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="stuRegForm">
                <div class="mb-3">
                    <i class="fas fa-user"></i><label for="stuname" class="form-label ps-2 fw-bold">Name</label>
                    <small id="statusMsg1"></small>
                    <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
                    
                  </div>
                <div class="mb-3">
                    <i class="fas fa-envelope"></i><label for="stuemail" class="form-label ps-2 fw-bold">E-mail</label>
                    <small id="statusMsg2"></small>
                    <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <i class="fas fa-key"></i><label for="stupass" class="form-label ps-2 fw-bold">Password</label>
                    <small id="statusMsg3"></small>
                    <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
                </div>
                
                
              </form>
        </div>
        <div class="modal-footer">
          <span id="succMsg"></span>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="signup" class="btn btn-primary" onclick="addStu()">Signup</button>
        </div>
      </div>
    </div>
  </div>