<div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>FEMALE PATIENT RECORDS</b></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">

                
                 <?php
                  if(isset($_GET['status']) && $_GET['status'] === 'success'){
                      echo '<div class="alert alert-success"><i class="fa fa-check-circle"></i> <b>Success!</b> Data saved!</div>';
                    }else{
                      echo '<div class="alert alert-info"><i class="fa fa-envelope"></i> This screen displays all Female records</div>';                        
                  }
                ?>


                <table class="table">
                  <tr>
                    <thead>
                      <th><i class="fa fa-user"></i></th>
                      <th>Patient's Name</th>
                      <th>Course/Yr./Sec.</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>ID No.</th>
                      <th>
                        <div class="input-group">
                          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                          <button type="button" class="btn btn-primary">search</button>
                        </div>
                      </th>    
                    </thead>
                  </tr>
                  <tbody>
                    <?php
                      $query = "SELECT * FROM medicalrecords";
                      $res = mysqli_query($conn,$query);
                      while($rows = mysqli_fetch_assoc($res)):  
                    ?>
                    <tr>
                      <td><i class="fa fa-user"></i></td>
                      <td><?=$rows['name'];?></td>
                      <td><?=$rows['course_yr_sec'];?></td>
                      <td><?=$rows['age'];?></td>
                      <td><?=$rows['gender'] == 1 ? "Male" : "Female";?></td>
                      <td><?=$rows['id_number'];?></td>
                       <td >
                          <a class="btn btn-primary btn-sm" href="/?page=patient-send&id=<?=$rows['id'];?>"><i class="fas fa-share-square"></i> View</a>
                          <a class="btn btn-info btn-sm" href="/?page=patient-edit&id=<?=$rows['id'];?>"><i class="fas fa-pencil-alt"></i> Update</a>
                          <a onclick="return delete_data('medical-delete',<?=$rows['id'];?>);" class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                  <?php endwhile;?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer-->
            </div>

