<div  class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add System User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/pages/user-add.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="uname">User Name</label>
                    <input type="text" class="form-control" id="uname" name="uname" placeholder="User name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email address">
                  </div>

                  <div class="form-group">
                    <label>Staff Designation</label>
                    <select name="role" id="role" class="form-control"> 
                      <option value="1">Physician</option>
                      <option value="0">Staff</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name = "password" placeholder="Password">
                  </div>
                   <div class="form-group">
                    <label for="Rpassword">Repeat Password</label>
                    <input type="password" class="form-control" id="Rpassword" name = "Rpassword" placeholder="Repeat password">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1):?>
                  <button type="submit" name="save" class="btn btn-block btn-primary btn-lg">Save</button> &nbsp;
                 <?php else: echo '<i class="fa fa-lock"></i>'; endif;?>
                </div>
              </form>
            </div>