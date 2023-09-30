<div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Manage User</b></h3>

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
                      echo '<div class="alert alert-info"><i class="fa fa-envelope"></i> This screen displays the users record</div>'; 
                    }
                ?>

                <table class="table">
                  <tr>
                    <thead>
                      <th><i class="fa fa-user"></i></th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Action</th>
                      
                    </thead>
                  </tr>
                  <tbody>
                    <?php
                      $query = "SELECT * FROM users";
                      $res = mysqli_query($conn,$query);
                      while($rows = mysqli_fetch_assoc($res)):  
                    ?>

                    <tr>
                      <td><i class="fa fa-user"></i></td>
                      <td><a href="/?page=change-pass&id=<?=$rows['id'];?>"><?=$rows['user_name'];?></a></td>
                      <td><?=$rows['email'];?></td>
                      <td><?=$rows['role'] == 1 ? "Physician" : "Staff";?></td>
                      <td>
                    <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1):?>
                    <a class="btn btn-info btn-sm" href="/?page=user-edit&id=<?=$rows['id'];?>"><i class="fas fa-pencil-alt"></i> Edit</a>
                    <a onclick="return delete_data('user-delete',<?=$rows['id'];?>);" class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  <?php else: echo '<i class="fa fa-lock"></i>'; endif; endwhile;?>
                  </tbody>
                </table>
              </div>
      </div>

