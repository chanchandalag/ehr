<?php
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id='$id'";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($res);

?>

<div  class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
              <form method="POST" action="/pages/user-edit-save.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="uname">User Name</label>
                  <input type="text" class="form-control" id="uname" name="uname" placeholder="User name" value="<?=$row['user_name'];?>">
                  </div>
                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email address" value="<?=$row['email'];?>">
                  </div>
                  <div class="form-group">
                    <label>Staff Designation</label>
                    <select name="role" id="staff" class="form-control"> 
                      <?php
                        if($row['role'] == 1){
                          echo '<option value="1" selected>Medical Doctor</option> <option value="0">Staff</option>';
                        }else{
                          echo '<option value="1">Medical Doctor</option> <option value="0" selected>Staff</option>';
                        }

                      ?>


                    </select>
                  </div>
                <div class="card-footer">
                  <input type="hidden" name="userid" value="<?=$id;?>">
                  <button type="submit" name="save" class="btn btn-block btn-success btn-lg">Save changes</button> &nbsp;
                </div>
              </form>
            </div>