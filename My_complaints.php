<?php
    require 'core/session.php';
    require 'core/config.php';
    include 'core/user_key.php';
    //for session
    $session=$_SESSION['email'];
    $ref = rand (3858558,100000);$error = "";$message = "";$alpha="M y a p p ";$statuses="open";
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

        

    </div>
</body>

</html>






<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT_LOG  </title>
    <link rel="shortcut icon" href="files/img/ico.ico">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/custom.css">
    <style media="screen">
    table{border: 0px;}
    td{
      padding:10px;
      border-top: 0px solid #eee;
      border-bottom: 0px solid #eee!important;
      padding-left: 0px;
      color:#0ea798;
    }
    input,button.log{width: 450px;}
    </style>
  </head>
  <body>
    <div class="cover user text-center" style="height:120px;">
      <br>
      <h2>My Complaints</h2>
    </div>
   
    

    <div class="div">
        <div class="col-lg-12 ">
          <?php
            $result = mysql_query("SELECT * FROM `view_cmp` WHERE email LIKE '%$session%'");
            $num_rows = mysql_num_rows($result);
          ?>
              <div class='admin-data'>
                My Complaints 
                <span class='button view' href=''><?php echo "$num_rows";?></a>
                
              </div>

               
                <br><br><br><br><br>
          <?php
            $db=mysql_query("SELECT * FROM `view_cmp` WHERE email LIKE '%$session%' ");
            while($data=mysql_fetch_array($db)) {
            echo"<div class='admin-data'>";
            echo $data['name'];
            echo "<a class='button view' href='My_complaint_view.php?id=$data[id]'>View</a>";
            echo "</div>";
           }
          ?>
        </div>

        
    </div>


    <script src="files/js/jquery.js"></script>
    <script src="files/js/bootstrap.min.js"></script>
    <script src="files/js/script.js"></script>
  </body>
</html>
