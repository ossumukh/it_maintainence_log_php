<?php
  require 'core/config.php';
  require 'core/session.php';
  error_reporting(0);
  if(empty($_POST)===false){
    $name = mysql_real_escape_string($_POST['name']);
    $username =  mysql_real_escape_string($_POST['username']);
    $email =  mysql_real_escape_string($_POST['email']);
    $post = mysql_real_escape_string($_POST['post']);
    $password =  mysql_real_escape_string($_POST['password']);
    if(empty($name)||empty($username)||empty($email)||empty($post)||empty($password)){
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL) === true) {
      $message = "Not a Valid Email address!";
    }else{
      $string = mysql_query("INSERT INTO `dummy` VALUES ('0','$name','$username','$email','$post','$password',NOW())") or die(mysql_error());
      $message = "Account has been Registerd";
      }
  }
?>


<!DOCTYPE html>

<head>
  <title>R V College of Engineering</title>
</head>

<div style="
    padding-top: 20px;
    padding-left: 20px;
    padding-right: 20px;
    margin: 0;
    padding-bottom: 10px;
">
  <div
    style="display: flex;justify-content: space-between;padding-left: 5vw;padding-right: 5vw;align-items: center;font-family: sans-serif;">
    <div>
      <a href="/"><img
          src="https://scontent.fblr1-4.fna.fbcdn.net/v/t1.6435-9/87503689_111002383835295_3256861726187978752_n.png?_nc_cat=108&ccb=1-5&_nc_sid=973b4a&_nc_ohc=joJoEuK2r7UAX8n8ToN&_nc_ht=scontent.fblr1-4.fna&oh=d5849ce590313d2f2f11307fd9cdb872&oe=61D6BA2C"
          alt="Home" style="width: 120px;"></a>
    </div>

    <div style="text-align: center;">
      <h3 class="rtecenter" style="
    margin-block-start: 0;
    margin-block-end: 15px;
    font-weight: normal;
"><span style="font-size:16px">Rashtreeya Sikshana Samithi Trust</span></h3>
      <h1 class="rtecenter" style="
    text-decoration: none;
    margin-block-end: 0;
"><span style="font-size:26px"><a href="/" style="
    text-decoration: none;
">R V College of Engineering </a></span></h1>
      <h6 class="rtecenter" style="
    margin-block-start: 7px;
    margin-block-end: 3px;
    font-weight: normal;
"><span style="font-size:12px">Autonomous Institution affiliated to Visvesvaraya Technological University,
          Belagavi</span></h6>
      <h6 class="rtecenter" style="
    margin-block-start: 3px;
    margin-block-end: 0;
    font-weight: normal;
"><span style="font-size:12px"></span></h6>
    </div>

    <div style="display: flex;justify-content: space-between;">
      <h1 style="font-weight: normal;
    display: flex;
    align-items: center;
    font-size: 25px;
    float: left;
    padding-right: 2vw;
    "></h1>
      <!-- <img alt="" src="https://www.rvce.edu.in/sites/all/themes/tb_rave/images/anniversary-logo.jpg"> -->
    </div>
  </div>
  
</div>
<div
            style="display:inline-flex; float: right; padding: 15px; background-color:#27447E;width: 100%; margin-bottom: 20px;">
            
        </div>

</html>










<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPMS </title>
    <link rel="shortcut icon" href="files/img/ico.ico">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/custom.css">
  </head>
  <body>
  <div class="animated fadeIn">
    <!-- <div class="cover dummy text-center"> -->
    <!-- <svg fill="#fff" height="148" viewBox="0 0 24 24" width="148" xmlns="http://www.w3.org/2000/svg" class="shad">
          <path d="M0 0h24v24H0z" fill="none"/>
          <path d="M5 16c0 3.87 3.13 7 7 7s7-3.13 7-7v-4H5v4zM16.12 4.37l2.1-2.1-.82-.83-2.3 2.31C14.16 3.28 13.12 3 12 3s-2.16.28-3.09.75L6.6 1.44l-.82.83 2.1 2.1C6.14 5.64 5 7.68 5 10v1h14v-1c0-2.32-1.14-4.36-2.88-5.63zM9 9c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm6 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/>
      </svg> -->

      <br>
      <h2 style="text-align:center;">SIGN UP</h2>
    </div>
      <div class="padd">
        <div class="col-lg-12 text-center">
          
              <form class="" method="post" autocomplete="off">
                <input type="text" name="name" placeholder="Name"/>
                <br><br>
                <input type="text" name="username" placeholder="Username"/>
                <br><br>
                <input type="text" name="email" placeholder="Email"/>
                <br><br>
                <input type="text" name="post" placeholder="Designation"/>
                <br><br>
                <input type="password" name="password" placeholder="Password"/>
                <?php echo "<p>".$message."</p>"; ?>
                <br>
                <button type="submit" class="log">Sign Up</button>
              </form>
              <?php
                if (isset($_SESSION['username'])===true) {
                  echo "<br><br><br><h3>Back to <a href = 'admin/admin-profile.php'>Profile</a></h3>";
                }
              ?>
        </div>
      </div>
      <div class="links">
        <a href="index.php">Home </a>
      </div>
    </div>
    <script src="files/js/jquery.js"></script>
    <script src="files/js/bootstrap.min.js"></script>
    <script src="files/js/script.js"></script>
  </body>
</html>
