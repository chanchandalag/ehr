<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" sizes="96x96" href="img/PIT LOGO.png">
  <title>Palompon Institute of Technology</title>
  <link rel="stylesheet" type="text/css" href="#">
</head>
<body>
  <div class="container"> 
<nav class="navbar navbar-inverse" style="margin-top:20px;">
    <div class="container-fluid">
     <div class="banner">
<div style="color: white;margin-left: 10px;margin-bottom:30px;margin-top:-50px;font-size:50px;font-family:Dr Mlombe;"><b>Electronic Health Records<b></div>
                    <img src="img/PIT LOGO.png"  style="margin-left: 230px; border-radius:100%;width:120px;">

               </div> 
     

     </div>
     <br>
  <form action="login-process.php" method="post">
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>Enter username</label>
    <input type="text" name="uname" placeholder="User Name">

    <label>Enter Password</label>
    <input type="password" name="password" placeholder="Password"><br>

    <button type="submit">Login</button>
  </form>

<style type="text/css">
body {
  background-image: url(img/background.jpg);
  backdrop-filter: blur(8px);
  background-repeat: no-repeat;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;x
}

*{
  font-family: Dr Mlombe;
  box-sizing: border-box;
}

form {
  width: 400px;
  border: 5px solid #ccc;
  padding: 30px;
  background: transparent;
  border-radius: 15px;
  margin-left: 90px;
}

h2 {
  text-align: center;
  margin-bottom: 40px; 
}

input {
  display: block;
  border: 2px solid #ccc;
  width: 95%;
  padding: 10px;
  margin: 10px auto;
  border-radius: 5px;
}

label {
  color: white;
  font-size: 18px;
  padding: 10px;
}

button {
  float: right;
  background: darkgray;
  padding: 2px 50px;
  color: white;
  border-radius: 5px;
  margin-right: 10px;
  border: none;
}

button:hover{
  opacity: .7;
}
 .error{
  background: #F2DEDE;
  color: #A94442;
  padding: 10px;
  width: 95%;
  border-radius: 5px;
 }


  </style>

</body>
</html>