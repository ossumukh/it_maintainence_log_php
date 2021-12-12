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
<!-- {% load static %} -->

<html class="no-js" lang="en" dir="ltr"
    prefix="content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ og: http://ogp.me/ns# rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#">


<head>
    <link type="text/css" rel="stylesheet" href='{% static "styles/styles.css" %}' />
    <meta charset="utf-8" />
    <meta name="Generator" content="Drupal 7 (http://drupal.org)" />
    <link rel="canonical" href="/rvce-departments" />
    <link rel="shortlink" href="/node/1274" />
    <link rel="shortcut icon" href="https://rvce.edu.in/sites/default/files/logo_0_0.png" type="image/png" />
    <link rel="profile" href="http://www.w3.org/1999/xhtml/vocab" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta http-equiv="cleartype" content="on" />
    

    <link rel="apple-touch-icon-precomposed"
        href="https://rvce.edu.in/sites/all/themes/omega/omega/apple-touch-icon-precomposed.png" />
    <link rel="apple-touch-icon-precomposed"
        href="https://rvce.edu.in/sites/all/themes/omega/omega/apple-touch-icon-precomposed-114x114.png"
        sizes="114x114" />
    <link rel="apple-touch-icon-precomposed"
        href="https://rvce.edu.in/sites/all/themes/omega/omega/apple-touch-icon-precomposed-144x144.png"
        sizes="144x144" />
    <link rel="apple-touch-icon-precomposed"
        href="https://rvce.edu.in/sites/all/themes/omega/omega/apple-touch-icon-precomposed-72x72.png" sizes="72x72" />
    <meta name="viewport" content="width=device-width" />
    <title>IT_LOG</title>
    <link type="text/css" rel="stylesheet"
        href="https://rvce.edu.in/sites/default/files/css/css_vSJUJPo75qsvkoUnKgyzbJHbQXMtSRbJeobje0chv_U.css"
        media="all" />
    <link type="text/css" rel="stylesheet"
        href="https://rvce.edu.in/sites/default/files/css/css_v44u-uX74X-D4_YiZjIXk-glROT9R78T7B-mU0_8bnw.css"
        media="all" />
    <link type="text/css" rel="stylesheet"
        href="https://rvce.edu.in/sites/default/files/css/css_qthF0gKgJgjBB28FMTyrz3yoP28-PB8wrPhvsVkYvK8.css"
        media="all" />

    <link type="text/css" rel="stylesheet"
        href="https://rvce.edu.in/sites/default/files/css/css__gHmKb6iiQ92ec4TUIzTtAqZ7CIKgqwDHxI6h21e77w.css"
        media="all" />
    
</head>

<body class="html not-front not-logged-in page-node page-node- page-node-1274 node-type-page section-rvce-departments">
    <div>
        <header class="headerWarp" role="banner" style="width: 100%;">
            <div class="brandInner" style="width: 100%;">
                <div class="logo">
                    <a href="/" title="Home" rel="home" class="site-logo"><img style="height: 7rem;width: 7rem;"
                            src="https://scontent.fblr4-3.fna.fbcdn.net/v/t1.6435-9/87503689_111002383835295_3256861726187978752_n.png?_nc_cat=108&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=joJoEuK2r7UAX-K5KK3&_nc_ht=scontent.fblr4-3.fna&oh=acac6bab4aed6333fb3268f1823145e0&oe=61D6BA2C" alt="Home" /></a>
                </div>
                <div class="brandName">
                    <div class="l-region l-region--branding">
                        <div id="block-block-28" class="block block--block block--block-28">
                            <div class="block__content">
                                <h3 class="rtecenter"><span style="font-size:16px">Rashtreeya Sikshana Samithi
                                        Trust</span></h3>
                                <h1 class="rtecenter"><span style="font-size:26px"><a href="/" title="Home">R V College
                                            of Engineering </a></span></h1>
                                <h6 class="rtecenter"><span style="font-size:12px">Autonomous Institution affiliated to
                                        Visvesvaraya Technological University, Belagavi</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div style="display:inline-flex;  padding: 15px; background-color:#27447E;width: 100%; margin-bottom: 20px; font-weight: bold;">
            <!-- <input type="submit" value="Register"><br>
            <input type="submit" value="Logout"> -->
        </div>






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
    <div class="cover dummy text-center">
    <!-- <svg fill="#fff" height="148" viewBox="0 0 24 24" width="148" xmlns="http://www.w3.org/2000/svg" class="shad">
          <path d="M0 0h24v24H0z" fill="none"/>
          <path d="M5 16c0 3.87 3.13 7 7 7s7-3.13 7-7v-4H5v4zM16.12 4.37l2.1-2.1-.82-.83-2.3 2.31C14.16 3.28 13.12 3 12 3s-2.16.28-3.09.75L6.6 1.44l-.82.83 2.1 2.1C6.14 5.64 5 7.68 5 10v1h14v-1c0-2.32-1.14-4.36-2.88-5.63zM9 9c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm6 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/>
      </svg> -->

      <br>
      <h2>SIGN UP</h2>
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
