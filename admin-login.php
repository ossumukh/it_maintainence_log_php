<?php
  //user login and homepage

  require 'core/session.php';
  require 'core/config.php';
    require 'core/redirect.php';

  $message="";

  if(empty($_POST)===false){
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
    if(empty($username) || empty($password)){
          header('Location:admin-login.php');
    }else{
        $query1=mysql_query("SELECT * FROM `admin` WHERE id AND username='$username' and password='$password'") or die(mysql_error());
        if(mysql_num_rows($query1)>0){
            $_SESSION['username'] = $_REQUEST['username'];
            header('Location:admin/admin-profile.php');
        }else{
          $message="Admin username and password is incorrect";
        }
      }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT_LOG</title>
    <link rel="shortcut icon" href="files/img/ico.ico">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/custom.css">
  </head>
  <body>
 
      <?php
      include 'footer.php';
      include 'core/jsscript.php';
      ?>

  </body>
</html>



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
    /* float: left; */
    padding-right: 2vw;
    "></h1>
      <!-- <img alt="" src="https://www.rvce.edu.in/sites/all/themes/tb_rave/images/anniversary-logo.jpg"> -->
    </div>
  </div>
  
</div>
<div
            style="display:inline-flex; padding: 15px; background-color:#27447E; width: 100%; margin-bottom: 20px;">
            
        </div>

</html>
        

        <div class="animated fadeIn">
        
            <!-- <div class="cover admin text-center"> -->
        
              <br>
              <h2 style="text-align:center;">ADMIN LOGIN</h2>

            </div>
        
              <div class="padd">
        
                <div class="col-lg-12 text-center">
                      <form class="" method="post" autocomplete="off">
                        <label for="username"></label>
                        <input type="text" name="username" placeholder="Admin username" id="email">
                        <br><br>
                        <label for="password"></label>
                        <input type="password" name="password" placeholder="Password" id="pass">
                        <br><br>
                        <button type="submit" class="log">Login</button>
                        <br><br>
                        <span class="red"><?php echo $message; ?></span>
                      </form>
                      <br>
                </div>
              </div>
              <div class="links">
                <a href="dummy-login.php">Engineer </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">User </a>
              </div>
          </div>



    </div>
</body>

</html>