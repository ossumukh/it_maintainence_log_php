<?php
  require '../core/session.php';
  require '../core/config.php';
  require '../core/admin-key.php';
  $session_name = $_SESSION['username'];
  if(empty($_POST)===false){
    $subject = mysql_real_escape_string($_POST['subject']);
    $story =  mysql_real_escape_string($_POST['story']);

    if(empty($subject) || empty($story)){

    }else{
      mysql_query("INSERT INTO `posts` VALUES ('0','$subject','$story','$session_name')") or die(mysql_error());
      $message = "
      <div class='alert succ' id='msg'>
        <div class ='text-right' id='close'>
          <svg class='pointer' fill='#ccc' height='24' viewBox='0 0 24 24' width='24'     xmlns='http://www.w3.org/2000/svg'>
            <path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z'/>
            <path d='M0 0h24v24H0z' fill='none'/>
          </svg>
          <p class='text-center'>Your post has been Posted</p>
        </div>
      </div>";
      }
  }

?>



<!DOCTYPE html>

<html class="no-js" lang="en" dir="ltr"
    prefix="content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ og: http://ogp.me/ns# rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#">


<head>
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
    <title>Header</title>
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

        <div
            style="display:inline-flex; float: right; padding: 15px; background-color:#27447E;width: 100%; margin-bottom: 20px;">
            
        </div>

    </div>
</body>

</html>



<br><br><br><br><br><br><br><br>




<!DOCTYPE html>
<html>
  <!-- <head> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT_LOG </title>
    <link rel="shortcut icon" href="../files/img/ico.ico">
    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="../files/css/custom.css">
    <script src="../files/js/script.js"></script>

  <!-- </head> -->
  <body >

  <?php require 'nav.php'; ?>

  <div class="animated fadeIn">


    <div class="cover main">
      <?php
      if (isset($_SESSION['username'])===true) {echo "<h1> Welcome, ".$_SESSION['username']."</h1>";}
       ?>
       <a class="button logout" href="../logout.php" onClick="javascript:return confirm ('Do you really want to log out?');"> Logout </a>
       &nbsp;&nbsp;&nbsp;


       <p class="text-right">
          <?php echo date("l, d M"); ?>
       </p>

    </div>

    <div class="div">
      <div class="col-lg-12">
          <div class="analysis">
            <?php
              $engi = mysql_query("SELECT * FROM `dummy`");
              $count_engi = mysql_num_rows($engi);

              $users = mysql_query("SELECT * FROM `circle`");
              $count_users = mysql_num_rows($users);

              $cmp = mysql_query("SELECT * FROM `cmp_log`");
              $count_cmp = mysql_num_rows($cmp);

              $frd = mysql_query("SELECT * FROM `view_cmp`");
              $count_frd = mysql_num_rows($frd);
            ?>

            <div class="track theme">
                Total Users <br> <p><?php echo $count_users;?></p>
            </div>

            <div class="track vio">
                Total Engineers <br> <p><?php echo $count_engi;?></p>
            </div>

            <div class="track red">
                Complaints <br> <p><?php echo $count_cmp;?></p>
            </div>

            <div class="track blue">
                Forwarded <br> <p><?php echo $count_frd;?></p>
            </div>

          </div>


          <div class="textbox">
          <br><br>
            <?php

            $query1=mysql_query("SELECT * FROM `circle` ORDER BY id DESC LIMIT 1 ");
            $name=mysql_fetch_array($query1);
            $new_user=$name['name'];


            $query=mysql_query("SELECT * FROM `cmp_log` ORDER BY id DESC LIMIT 1 ");
            $name2=mysql_fetch_array($query);
            $new_msg=$name2['name'];

            $query4=mysql_query("SELECT * FROM `dummy` ORDER BY id DESC LIMIT 1 ");
            $name3=mysql_fetch_array($query4);
            $new_eng=$name3['name'];



             ?>

             <div class="content">
               <div class="div_data">New User</div>
               <div class="div_data">New Message From</div>
               <div class="div_data">New Engineer </div>
             </div>
              <div class="div_data vio">
                    <span><?php echo $new_user; ?></span>
              </div>

              <div class="div_data blue">
                    <span><?php echo $new_msg; ?></span>
              </div>

              <div class="div_data theme">
                  <span> <?php echo $new_eng; ?></span>
              </div>

          </div>
      </div>

      <!-- Add post
      <div class="col-lg-12">
        <div class="post_content">
          <div class="text-center">
            <h2>Anything on your mind</h2><br><br>
            <form class="" action="" method="post">
                <input type="text" class="post" name="subject" placeholder="Subject"/><br><br>
                <textarea name="story" class="post" rows="3" cols="30" placeholder="Story"></textarea><br><br>

                <button type="submit" class="log">Post</button>
            </form>

            <?php echo $message; ?>
          </div>
        </div> -->





          <div class="content"><br><br><br><br>
            <?php
              $db=mysql_query("SELECT * FROM `posts` ");
              while($data=mysql_fetch_array($db)) {
                $id=$data['id'];
              echo "<div class='glow'> ";
              echo "<h4 class='heading'> Heading : ".$data['subject']."</h4>";
              echo "<p> Story : ".$data['story']."<br>";
              echo "<div class='text-right'>  <a class ='button logout' href ='delete_posts.php?id=$id' onClick=\"javascript:return confirm ('Do you really want to logout ?');\">Delete</a>";
              echo "</p></div></div> ";
             }
            ?>



          </div>
      </div>

    </div>


  </div>


    <!-- <footer>
    <br><br>&copy <?php echo date("Y"); ?> <?php echo $web_name; ?>
    </footer> -->

    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/script.js"></script>
    <script>
    $(document).ready(function(){
        $("#close").click(function(){
            $("#msg").remove();
        });
    });
  </script>


  </body>
</html>
