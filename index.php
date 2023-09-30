<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="96x96" href="img/PIT LOGO.png">
  <title>Palompon Institute of Technology</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li> 
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
  
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
    <center>
      <img src="img/PIT LOGO.png" alt="PIT LOGO" style="margin-top:20px;width:100px;border-radius:100%;"> 
      <p class="text-white">PALOMPON INSTITUTE <br> OF TECHNOLOGY <br> HEALTH RECORDS</p>
    </center>
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/?page=dashboard" class="nav-link active">
              <i class="nav-icon fas fa-hand-holding-medical"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Patients
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/?page=addpatient" class="nav-link ">
                  <i class="fa fa-plus-square nav-icon"></i>
                  <p >Add patients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/?page=students-record" class="nav-link">
                  <i class="fa fa-medkit nav-icon"></i>
                  <p>Students record</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/?page=employees-record" class="nav-link">
                  <i class="fa fa-medkit nav-icon"></i>
                  <p>Employees record</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/?page=dependants-record" class="nav-link">
                  <i class="fa fa-medkit nav-icon"></i>
                  <p>Dependants record</p>
                </a>
              </li>
            </ul>
            <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Medical & Dental
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/?page=medical-records" class="nav-link ">
                  <i class="fa fa-clinic-medical nav-icon"></i>
                  <p>Medical Records</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/?page=dental-records" class="nav-link">
                  <i class="fa fa-tooth nav-icon"></i>
                  <p>Dental Records</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
            <a href="/?page=consultation" class="nav-link active">
              <i class="nav-icon fas fa-diagnoses"></i>
              <p>
                Consultation
              </p>
            </a>
          </li>
            <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                System
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/?page=manage-user" class="nav-link ">
                  <i class="fa fa-user-plus nav-icon"></i>
                  <p>Manage user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/?page=user" class="nav-link">
                  <i class="fa fa-plus-square nav-icon"></i>
                  <p>Add user</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
            <a href="Logout.php" class="nav-link active">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">
                <?php
                  if(isset($_GET['page'])){
                    echo str_replace('-', ' ', ucfirst($_GET['page']));
                  }else{
                    echo 'Dashboard';
                  }
                ?>
              </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <?php
        if(isset($_GET["page"])){
          $p =  "pages/".$_GET["page"].".php";
          if(file_exists($p)){
            include "pages/".$_GET["page"].".php";
          }else{
            echo 'ERROR 404: Page not found';
          }


        }else{
          include "pages/dashboard.php";
        }
        ?>



        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
   <footer class="main-footer">
    <!-- To the right -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>


<script>

function delete_data(url,data_id){
  var c = confirm("Are you sure you want to delete this record?");
  if(c){
    //success
    $.post('/pages/'+url+'.php',{did:data_id},function(r){
      if(r == 1){ window.location.reload();}
      console.log(r);
    });
  }else{
    console.log("Cancelled");
  }
}

  $(function(){
    //delete-btn
    function delete_data(url,data_id){
      var c = confirm("Are you sure you want to delete this record?");
      if(c){
        //success
        $.post('/pages/'+url+'.php',{did:data_id},function(r){
          if(r == 1){ window.location.reload();}
          console.log(r);
        });
      }else{
        console.log("Cancelled");
      }
    }
    

  });
  </script>
</body>
</html>


<?php
}else{
  header("Location: login.php");
  exit();

}
  ?>

