<?php
include 'partials/constants.php';
?>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <script src="js/vendor/modernizr.js"></script>
    <link href="css/style.css" rel="stylesheet"/>
    <style>
        html, body {
            height: 100%;
            background: #262c31;
        }

        .main {
            height: 100%;
            width: 100%;
            display: table;
        }

        .wrapper {
            display: table-cell;
            height: 100%;
            vertical-align: middle;
        }

        #login {
            width: 30%;
        }

        @media all and (max-width: 800px) {
            #login {
                width: 90%;
            }
        }
    </style>
</head>

<body>
<div class="main">
    <div class="wrapper">
        <div id="login" class="row" style="margin: auto">
            <div class="large-12 columns text-center">

                <form method="post" action="">
                    <input type="text" placeholder="Email" class="border-radius-top" name="email"/>

                    <input type="password" placeholder="Password" class="no-radius" name="password"/>


                    <input type="submit" name="Login" value="Login"
                           class="button small border-radius-bottom coral-bg" style="width: 50%">
                    <button class="button small border-radius-bottom coral-bg" onclick="window.open('signup.php')">Sign
                        up
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>
</body>

<?php
if (isset($_POST['Login'])) {
    $username = $_POST['email'];
    $password = md5($_POST['password']);
    $result = mysqli_query($conn, "select * from users where email ='$username' and password = '$password'");

    $num_row = mysqli_num_rows($result);
    if ($num_row > 0) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['admin_id'] = $row['id'];
        header("location:manage-admin.php");
    }

}
?>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>

</html>

