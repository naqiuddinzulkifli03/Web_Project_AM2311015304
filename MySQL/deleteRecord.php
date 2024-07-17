<?php
      session_start();
	// Connect to database
	include_once 'connection.php';
// Get all the categories from category table
	$sql = "SELECT * FROM `users`";
	$all_categories = mysqli_query($con,$sql);
       
// Query to fetch all records from rental table
$result = mysqli_query($con, "SELECT * FROM users");
if(isset($_POST['submit']))
	{
		$codes = mysqli_real_escape_string($con,$_POST['codes']);
		$sqldel = "DELETE FROM users WHERE `users`='" . $_POST["codes"] . "'";

                if ($con->query($sqldel) === TRUE) {
                    echo "Record deleted successfully";
                } else {
                    echo "Error deleting record: " . $con->error;
                }
	}
        mysqli_close($con);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Record</title>
<link rel="stylesheet" type=:"text/css" href="style.css"
</head>
	<style>
	*{  
      padding: 0;  
      margin: 0;  
      box-sizing: border-box;  
 }  
 body{  
      width: 100%;  
      height: 100vh;  
      background-color: #34495e;  
      position: relative;  
      font-family: 'verdana',sans-serif;  
 }  
 header{  
      width: 100%;  
      height: 80px;  
      background-color: #2c3e50;  
 }  
 table{  
      width: 75%;  
      position: absolute;  
      top: 50%;  
      left: 50%;  
      transform: translate(-50%,-50%);  
 }  
 .heading{  
      background-color: #FFFF;  
 }  
 .heading th{  
      padding: 10px 0;  
 }  
 .data{  
      text-align: center;  
      color: #FFFF;  
 }  
 .data td{  
      padding: 15px 0;  
 }  
 #btn{  
      text-decoration: none;  
      color: #FFF;  
      background-color: #e74c3c;  
      padding: 5px 20px;  
      border-radius: 3px;  
 }  
 #btn:hover{  
      background-color: #c0392b;  
 }  
	</style>

<body>
	<?php   
 include 'connection.php';  
 $query = "select * from users";  
 $run = mysqli_query($con,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Delete Data From Database in PHP</title>  
      <link rel="stylesheet" type="text/css" href="style.css">  
 </head>  
 <body>  
 <header></header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
        <th>No</th>
    	<th>ID</th>
    	<th>Username</th>
		<th>Name</th>
		<th>Created At</th>
		<th>Action</th>
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['id']."</td>  
                               <td>".$result['username']."</td>  
                               <td>".$result['name']."</td>  
                               <td>".$result['created_at']."</td>  
                               <td><a href='admindeleteprocess.php? id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>  
</body>
</html>