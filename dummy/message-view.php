<?php
  require 'session.php';
  require '../core/config.php';
  #require '../core/admin-key.php';

  $id = $_GET['id'];
	$result = mysql_query("SELECT * FROM `view_cmp` WHERE id='$id'");
	$arry = mysql_fetch_array($result);
	if (!$result) {
			die("Error: Data not found..");
		}

    $query1=mysql_query("SELECT * FROM `view_cmp` WHERE id='$id'");
    while( $arry=mysql_fetch_array($query1) ) {

      #$id = $arry['id'];

      $name = $arry['name'];

      $email = $arry['email'];
      $phone_no = $arry['phone no'];
      $subject = $arry['subject'];
      $complain = $arry['complain'];
      $ref = $arry['ref_no'];
      $stat=$arry['statuses'];
      $dummy=$arry['dummy'];
    }
 ?>


















<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT_LOG </title>
    <link rel="shortcut icon" href="../files/img/ico.ico">
    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="../files/css/custom.css">
  </head>
  <body>
  <?php require 'nav.php';?>
  <div class="cover main" style="background:#40C4FF;">
    <h1>Message</h1>
  </div>
  <form class="" method="post" autocomplete="off">
  <div class="animated fadeIn">
    <div class="container">
        <div class="col-lg-12 ">






        







           <br><br>

            <div class="colr">
                <h3>Message from <?php echo $name;?> </h3>
            </div>


           <br><br><br>
          <table>
          
            <?php
              $query1=mysql_query("SELECT * FROM `view_cmp` WHERE id='$id'");
              while( $arry=mysql_fetch_array($query1) ) {


                $user_id = $arry['user_id'];
                $name = $arry['name'];
              #  $username = $arry['username'];
                $email = $arry['email'];
                $phone_no = $arry['phone no'];
                $subject = $arry['subject'];
                $complain = $arry['complain'];
                $ref = $arry['ref_no'];
                $stat=$arry['statuses'];
              }


              // <form class="" method="post" autocomplete="off">
                 echo "<tr> <td> <b> Message Id </b> </td>";
                 echo "     <td> ".$id."</td> </tr>";




                 echo "<tr> <td> <b> Name </b> </td>";
                 echo "     <td> ".$name."</td> </tr>";



                 echo "<tr> <td> <b> Phone no </b> </td>";
                 echo "     <td> ".$phone_no."</td> </tr>";

                 echo "<tr> <td> <b> Subject </b> </td>";
                 echo "     <td> ".$subject."</td> </tr>";

                 echo "<tr> <td> <b> Complain </b> </td>";
                 echo "     <td> ".$complain."</td></tr>";

                 echo "<tr> <td> <b> Refference </b> </td>";
                 echo "     <td> ".$ref."</td></tr>";

                 echo "<tr> <td> <b> status </b> </td>";
                 echo "     <td> ".$stat."</td></tr>";

                 

                
                 
            ?>
            
            </table>



            
            <?php
            $query1=mysql_query("SELECT * FROM `view_cmp` WHERE id='$id'");
            // while( $arry=mysql_fetch_array($query1) ) {
            //   // $id=$arry['id'];
            //   // $name=$arry['name'];
            //   // $username=$arry['username'];
            //   // $email = $arry['email'];
            //      }
            //        if(empty($_POST)===false){
            //          $phoneno =mysql_real_escape_string($_POST['phoneno']);
            //          $subject = mysql_real_escape_string($_POST['subject']);
            //          $complain = mysql_real_escape_string($_POST['complain']);
            //         //  $statuses =mysql_real_escape_string($_POST['statuses']);
            //          if( empty($subject) || empty($complain))
            //          {
            //           $error = "Invalid subject or complain ";
            //          }
            //         //  else if(empty($statuses))
            //         //  {
            //         //   $error = "Invalid status";
            //         //  }
            //         //  else if(empty($phoneno) || empty($subject) || empty($complain)){}
            //         // else if(!preg_match("/^[0-9]*$/",$phoneno))
            //           else if (!preg_match("/^[0-9]*$/",$phoneno)||strlen($phoneno)!=10) {
            //            $error = "Invalid Phone Number";
            //          }else{
                       // mysql_query("INSERT INTO `view_cmp` VALUES ('$id','$ref','$name','$email','$phoneno','$subject','$complain','dummy','closed')") or die(mysql_error());
                      //  $message = "Your Complain has been Registerd";
                      mysql_query("UPDATE `view_cmp`
                      SET statuses='closed'
                      WHERE id='$id'")or die(mysql_error());
                  //      }
                  //  }
              ?>




            <?php
            $query1=mysql_query("SELECT * FROM `cmp_log` WHERE ref='$ref'");
                      mysql_query("UPDATE `cmp_log`
                      SET statuses='closed'
                      WHERE ref_no='$ref'")or die(mysql_error());
                  //      }
                  //  }
              ?>


              
            <td><button type="submit" class="log">complaint resolved</button></td>





          <br><br>

      </div>
    </div>

  </div>

  <!-- <footer>
  <br><br>&copy <?php echo date("Y"); ?> <?php echo $web_name; ?>
  </footer> -->
    <script src="../files/js/jquery.js"></script>
    <script src="../files/js/bootstrap.min.js"></script>
    <script src="../files/js/script.js"></script>

  </body>
</html>
