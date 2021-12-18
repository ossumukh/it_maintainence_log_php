<?php
    require 'core/session.php';
    require 'core/config.php';
    include 'core/user_key.php';
    //for session
    $session=$_SESSION['email'];
    $ref = rand (3858558,100000);$error = "";$message = "";$alpha="M y a p p ";$statuses="open";
 ?>
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
