<?php
$id = $_GET['id'];
$query = "SELECT * FROM patient WHERE id='$id'";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($res);

?>

<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Update Patient</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/pages/student-edit-save.php">
                <div class="card-body container">
                  <div class="row gy-6">
                  <div class="form-group col-md-6">
                    <label for="pname">Patient's Name</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter Patient's name" value="<?=$row['name'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="course">Course / Year & Section</label>
                    <input type="text" class="form-control" id="course" name="course" placeholder="Course / year & section" value="<?=$row['course_yr_sec'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Age" value="<?=$row['age'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="contact">Contact Number</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact number" value="<?=$row['contact'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="address">Home Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Home address" value="<?=$row['address'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email"> Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?=$row['email'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="num">ID No.</label>
                    <input type="text" class="form-control" id="num" name="num" placeholder="ID number" value="<?=$row['id_number'];?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Select Gender</label>
                    <select name="gender" id="gender" class="form-control">
                    <?php
                    	if($row['gender'] == 1){ 
                      		echo '<option value = "1" selected>Male</option> <option value = "0">Female</option>';
                      	}else{ 
                      		echo '<option value = "1">Male</option> <option value = "0" selected>Female</option>';
                      	}

                      ?>

                    </select>
                  </div>
                </div>
                  <div class="form-group" >
                    <span class="input-group-addon"> <b>Date of Birth<b> </span> 
                    <input type="date" placeholder="Payment Log date" name="dob" class="form-control" value="<?=$row['dob'];?>">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                	<input type="hidden" name="userid" value="<?=$id;?>">
                  <button type="submit" name="save" class="btn btn-block btn-success btn-lg">Save Changes</button>
                </div>
              </form>
            </div>