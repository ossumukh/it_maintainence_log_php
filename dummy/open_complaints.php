<?php
  require 'session.php';
  require '../core/config.php';
  require 'dummy-key.php';

  $result = mysql_query("SELECT * FROM `cmp_log`");
  $num_rows = mysql_num_rows($result);

  $eng_id = "";
 ?>



<?php  
 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "ossum", "focus", "cpmsphp");  
      $sql = "SELECT * FROM `view_cmp` WHERE dummy LIKE '%$eng_session%' And statuses not like 'closed' ";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["id"].'</td>  
                          <td>'.$row["name"].'</td>  
                          <td>'.$row["email"].'</td>  
                          <td>'.$row["phone no"].'</td>
                          <td>'.$row["subject"].'</td>
                          <td>'.$row["complain"].'</td>   
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["pdfs"]))  
 {  
      require_once('tcpdf_min/tcpdf.php');  
     //  $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 
      $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 
      $pdf->SetCreator(PDF_CREATOR);  
      $pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $pdf->SetDefaultMonospacedFont('helvetica');  
      $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $pdf->setPrintHeader(false);  
      $pdf->setPrintFooter(false);  
      $pdf->SetAutoPageBreak(TRUE, 10);  
      $pdf->SetFont('helvetica', '', 12);  
      $pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">id</th>  
                <th width="30%">name</th>  
                <th width="10%">email</th>  
                <th width="45%">phone no</th>  
                <th width="10%">complain</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $pdf->writeHTML($content); 
      header('Content-type: application/pdf');
      header('Content-Disposition: attachment; filename="file.pdf"'); 
      $pdf->Output('sample.pdf', 'D');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Export HTML Table data to PDF using TCPDF in PHP</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                <h3 align="center">Closed Complaints</h3><br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">id</th>  
                               <th width="15%">name</th>  
                               <th width="10%">email</th>
                               <th width="10%">Phone no</th>  
                               <th width="10%">Subject</th>
                               <th width="10%">Complaint</th>
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>