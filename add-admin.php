<?php
include "partials/header.php";
include "partials/menu.php";





?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" name="name" placeholder="Enter Your Name">
                    </td>
                </tr>

                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="email" name="email" placeholder="Your email">
                    </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="Your Password">
                    </td>
                    <td>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">

                    </td>
                </tr>

            </table>

        </form>


    </div>
</div>

<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn2 = mysqli_connect($host, $username, $password, $dbname);;
if (isset($_POST['submit'])) {
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "insert into users set name = '$name', email='$email',password='$password'";

    $res = mysqli_query($conn2, $sql);
    if ($res) {
      $_SESSION['admin'] ="<span style='color: #2ed573'>admin is added</span>";

      header("location:manage-admin.php");
    } else {
        $_SESSION['admin'] = "<span style='color: red'>admin is not added</span>";

        header("location:manage-admin.php");

    }
    }
 

?>
