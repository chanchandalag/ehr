<?php
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id='$id'";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($res);

?>

<div  class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change user password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/pages/change-pass-save.php">
                <div class="card-body container">
                  <div class="row gy-6">
                  <div class="form-group col-md-6">
                    <label for="opassword">Old Password</label>
                    <input type="password" class="form-control" id="opassword" name = "opassword" placeholder="Old password">
                  </div>
                   <div class="form-group col-md-6">
                    <label for="ropassword">Repeat Old Password</label>
                    <input type="password" class="form-control" id="ropassword" name = "ropassword" placeholder="Repeat old password">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="password">New Password</label>
                    <input type="password" class="form-control" id="password" name = "password" placeholder="New password">
                  </div>
                   <div class="form-group col-md-6">
                    <label for="password">Repeat New Password</label>
                    <input type="password" class="form-control" id="password" name = "password" placeholder="Repeat new password">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="hidden" name="userid" value="<?=$id;?>">
                  <button type="submit" name="save" class="btn btn-block btn-primary btn-lg">Save changes</button> &nbsp;
                 
                </div>
              </form>
            </div>