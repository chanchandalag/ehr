<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><b>ADD EMLPOYEE RECORDS</h3>
                  <a href="/?page=addpatient" role="button" class="float-sm-right btn btn btn-sm"><b class="fa fa-arrow-circle-left"> BACK</b></a>
              </div>

              
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/pages/patient-add.php">
                <div class="card-body container">
                  <?php
                    echo '<div class="alert alert-info"><i class="fa fa-envelope"></i><b> PERSONAL INFORMATION</b></div>';
                  ?>
                  <div class="row gy-6">
                  <div class="form-group col-md-6">
                    <label for="pname">ID No.</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter ID No.">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="pname">Course</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Select Course">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="pname">First Name</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter First Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="pname">Year</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Select Year">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="course">Middle Name</label>
                    <input type="text" class="form-control" id="course" name="course" placeholder="Enter Middle Name / N/A">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="pname">Section</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter Section">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="pname">Last Name</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter Last Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="age">Barangay</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Enter Barangay">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="contact">Extension Name</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="N/A">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="address">Municipality</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Municipality">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email"> Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                  </div> 
                  <div class="form-group col-md-6">
                    <label for="num">Province</label>
                    <input type="text" class="form-control" id="num" name="num" placeholder="Enter Province">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="pname">Current Address</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter Current Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="pname">Contact No.</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter Contact No">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="pname">Permanent Address</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter Permanent Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="pname">Age</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter Patient's name">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Sex</label>
                    <select name="gender" id="gender" class="form-control"> 
                      <option value = "1">Male</option>
                      <option value = "0">Female</option>                                        
                    </select>
                  </div>
                
                  <div class="form-group col-md-6" >
                    <label class="input-group-addon"> Date of Birth </label> 
                    <input type="date" placeholder="Payment Log date" name="dob" class="form-control" value="">
                  </div>
                </div>

                <?php
                  echo '<div class="alert alert-info"><i class="fa fa-exclamation-triangle"></i><b> EMERGENCY CONTACT INFORMATION</b></div>';
                ?>
                  <div class="row gy-6">
                  <div class="form-group col-md-6">
                    <label for="email"> Name</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email"> Relationship</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email"> Mobile No.</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email"> Telephone No.</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email"> Home Address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email"> Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="save"  class="btn btn-block btn-success btn-lg">Save</button>
                </div>
              </form>
            </div>


