<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>Autonomous Ground Vehicle(AGV) IIT Kharagpur</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    
    <!-- Styles -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="../css/settings.css" media="screen"/>
    <link rel="stylesheet" href="../css/color-scheme/blue.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">

    <!-- Base JS -->
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/stellar.js"></script>
    <script src="../js/main.js"></script>


    <!--Form-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <!-- Prety photo -->
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script>
        $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
        });
    </script>
</head>

<body class="main">

<?php
 require 'db_connect.php';

$_SESSION['facu'] = 'facu';
$_SESSION['admin'] = 'admin';

$con = mysqli_connect($host,$user,$pass,$db);
if(!$con){
    die("can not connect" . mysqli_connect_error());
    } 


if(isset($_POST['login'])){
    if(isset($_POST['pass'])){
        $password = $_POST['pass'];
        if($password== $admin){
            $_SESSION['menu'] = 'menu';
            $redirect_page = "admin.php";
            header('Location: '.$redirect_page);
            }
        else{
            $_SESSION['error'] = 'error';
            echo "<strong><center>Wrong Credentials</center></strong>";
            }
    }
}


if(!isset($_SESSION['admin'])){
                    $redirect = "login.php";
                    header('Location: '.$redirect);
                    unset($_SESSION['admin']);
                    exit();
                    }
                    
                    $_SESSION['logout'] = 'logout';
                    

?>




   <div class="content">
        <div class="layout">
            <div class="row">
                <center>
                <div class="row-item col-1_3">
                    <center><h3>Welcome to Admin Panel</h3>
                    <p>Login in</p></center>
                    <!-- Login -->
                    <form class="form-horizontal sys-login" method="POST" action="" name="form1" id="form1">
                        <?php if(isset($msg)){
                        echo $msg;
                        }
                        ?>  
                        <ul>
                        <div class="form-group">
                            <label>Password <span class="required">*</span></label>
                            <input type="text" name="pass" maxlength="20" class="field-long" required />
                            </div>
                        
                        <div class="form-group">
                        <div class="col-sm-10">  
                            <input class="btn colored" style="width:90px;" type="submit" id="login" name="login" alt="login" value="Log In" />
                            
                            </div>
                            </div>
                        </li>
                    </ul>   
                    </form> 
                            <!-- Login -->

                </div>
                </center>
            </div>
        </div>
    </div>

</body>

</html>