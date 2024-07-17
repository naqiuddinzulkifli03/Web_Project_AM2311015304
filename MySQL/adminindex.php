<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/gc.png" />
        <title>Car Rental</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="adminstyle.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'adminheader.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
					<h1 class="my-5">Hi, <b>
					<?php
						if (isset($_SESSION["username"])) {
    						echo htmlspecialchars($_SESSION["username"]);
						} else {
							echo "Admin"; // Or handle the case where username is not set
						}
						?></b></h1>
                       <p><h1>You are to be given the privilege to access behind the scene of this website.</h1></p>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="displayRecord.php">
                                <img src="../record.png" alt="Amogus">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">View Rental Record</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="displayuser.php">
                               <img src="../user.png" alt="Amogusgus">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">View User Details</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="deleteRecord.php">
                               <img src="../trash.png" alt="Amogusgusgus">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Delete User</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>© Copyright & Car Rental. All Rights Reserved. | Contact Us: +60 123887152</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>