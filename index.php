<?php

include "partials/header.php";
include "partials/menu.php";
$host = "localhost";
$username = "root";
$password = "";
$dbname = "final";
$sql_admin="select * from users";
$conn2 = mysqli_connect($host, $username, $password, $dbname);
$res_admin=mysqli_query($conn2,$sql_admin);



?>
        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Dashboard</h1>
                <br><br>

                <br><br>

                <div class="col-4 text-center">



                    <h1> <?php echo $res_admin->num_rows?></h1>
                    <br />

                    Admins
                </div>


            </div>
        </div>
        <!-- Main Content Setion Ends -->
