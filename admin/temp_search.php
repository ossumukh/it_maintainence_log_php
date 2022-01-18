<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPMS  </title>
    <link rel="shortcut icon" href="../files/img/ico.ico">
    <link rel="stylesheet" href="../files/css/bootstrap.css">
    <link rel="stylesheet" href="../files/css/custom.css">


  </head>


  <!-- <li><a href="search.php"> -->
        <!-- <svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0V0z" fill="none"/>
            <path d="M5.5 22v-7.5H4V9c0-1.1.9-2 2-2h3c1.1 0 2 .9 2 2v5.5H9.5V22h-4zM18 22v-6h3l-2.54-7.63C18.18 7.55 17.42 7 16.56 7h-.12c-.86 0-1.63.55-1.9 1.37L12 16h3v6h3zM7.5 6c1.11 0 2-.89 2-2s-.89-2-2-2-2 .89-2 2 .89 2 2 2zm9 0c1.11 0 2-.89 2-2s-.89-2-2-2-2 .89-2 2 .89 2 2 2z"/>
        </svg>
      Search</a></li> -->



<html>
<body>
<center>
<h1>Search Complaints</h1>
<!-- <a href="add_student.php">Add Student</a><br> -->
 
<form action="search.php" method="post">
<input type="text" name="search"  style="margin-up:10px;" id="search_city" placeholder="Type to search..."  >
<br><br>
<input type="submit" value="Search" class="btn btn-primary">
<!-- <a href="admin-profile.php">
   <button>Back</button>
</a> -->
</form>
<br> 



<html>
<script>
  $(document).ready(function() {
     $( "#search_city" ).keyup(function(){
       var query=$(this).val();
       if(query!='')
       {
         $.ajax({
           url:"temp_search.php",
           method:"POST",
           data:{query:query},
           success:function(data)
         })
       }
     });
  });
</script>

</body>
</html>


<?php
$conn = mysqli_connect("localhost", "ossum", "focus", "cpmsphp");
 
function get_city($conn , $search){ 
 $query = "select * from cmp_log where `name` like '%$search%' or `id` like '%$search%' or `phone no` like '%$search%' or `ref_no` like '%$search%'or `complain` like '%$search%' or `statuses` like '%$search%' order by id";
 $result = mysqli_query($conn, $query); 
 $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
 return $data; 
}
 
if (isset($_GET['search'])) {
 $getCity = get_city($conn, $_GET['search']);
 $cityList = array();
 foreach($getCity as $cmp_log){
 $cityList[] = $cmp_log['complain'];
 }
 echo json_encode($cityList);
}
?>




 <!-- <h3>complaints</h3> -->
<table border='1' width="1000px">
<div style="font-weight:bolder;">
<tr >
<td>id</td>
<td>Name</td>
<td>email</td>
<td>phone no</td>
<td>subject</td>
<td>complaint</td>
<td>reference no</td>
<td>status</td>

</tr>
</div>
<?php
// if (isset($_POST['submit'])) {
    $search= $_POST['search'];
 $conn = mysqli_connect("localhost", "ossum", "focus", "cpmsphp");
 
 if($conn->connect_error){
	die("Error in db connection".$conn->connect_error);
 }
// require_once('cpmsphp.php');
// $sql='select * from cmp_log order by id'or id like '%$search%'or phone no like '%$search%'
$sql="select * from `cmp_log` where `name` like '%$search%' or `id` like '%$search%' or `phone no` like '%$search%' or `ref_no` like '%$search%'or `complain` like '%$search%' or `statuses` like '%$search%' order by id";
$res=$conn->query($sql);
while($row=$res->fetch_assoc()){
		echo '<tr>';
		echo '<td>'.$row['id'].'</td>';
		echo '<td>'.$row['name'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['phone no'].'</td>';
		echo '<td>'.$row['subject'].'</td>';
        echo '<td>'.$row['complain'].'</td>';
        echo '<td>'.$row['ref_no'].'</td>';
        echo '<td>'.$row['statuses'].'</td>';
		echo '</tr>';
    }  
    // echo json_encode($data);
//   }
			
?>
</table>
</center>
</body>
</html>

