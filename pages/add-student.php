<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><b>ADD STUDENT RECORDS</b></h3>
                <a href="/?page=addpatient" role="button" class="float-sm-right btn btn btn-sm"><b class="fa fa-arrow-circle-left"> BACK</b></a>
              </div>


              
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/pages/student-add.php">
                <div class="card-body container">
                  <?php
                    echo '<div class="alert alert-info"><i class="fa fa-envelope"></i><b> PERSONAL INFORMATION</b></div>';
                  ?>
                  <div class="row gy-6">
                  <div class="form-group col-md-6">
                    <label for="id">ID No.</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="Enter ID No.">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="course">Course</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Select Course">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="year">Year</label>
                    <input type="text" class="form-control" id="pname" name="pname" placeholder="Select Year">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mname">Middle Name</label>
                    <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter Middle Name / N/A">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="section">Section</label>
                    <input type="text" class="form-control" id="section" name="section" placeholder="Enter Section">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="brgy">Barangay</label>
                    <input type="text" class="form-control" id="brgy" name="brgy" placeholder="Enter Barangay">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="ename">Extension Name</label>
                    <input type="text" class="form-control" id="ename" name="ename" placeholder="N/A">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="municipality">Municipality</label>
                    <input type="text" class="form-control" id="municipality" name="municipality" placeholder="Enter Municipality">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email"> Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                  </div> 
                  <div class="form-group col-md-6">
                    <label for="province">Province</label>
                    <input type="text" class="form-control" id="province" name="province" placeholder="Enter Province">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="caddress">Current Address</label>
                    <input type="text" class="form-control" id="caddress" name="caddress" placeholder="Enter Current Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="contact">Contact No.</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact No">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="paddress">Permanent Address</label>
                    <input type="text" class="form-control" id="paddress" name="paddress" placeholder="Enter Permanent Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Enter Patient's name">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Sex</label>
                    <select name="sex" id="sex" class="form-control"> 
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
                    <label for="name"> Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Complete Name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="relationship"> Relationship</label>
                    <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Relationship">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="mobile"> Mobile No.</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile no.">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="telephone"> Telephone No.</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Enter telephone no.">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="haddress"> Home Address</label>
                    <input type="text" class="form-control" id="hadress" name="haddressss" placeholder="Enter Home Address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="eadd"> Email Address</label>
                    <input type="text" class="form-control" id="eadd" name="eadd" placeholder="Enter Email Address">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="save"  class="btn btn-block btn-success btn-lg">Save</button>
                </div>
              </form>
            </div>


