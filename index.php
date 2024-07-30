<?php 
set_include_path("./");
$pdo = include_once("helpers/databaseConfig.php");
include_once("helpers/databaseQuerys.php");
session_start();
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $results=$users->select($pdo,$username);
    if(count($results)==0)
    {
        echo "<script>alert('username is wrong')</script>";
    }
    else
    {
        if(!password_verify($password,$results['Pass']))
        {
            echo "<script>alert('password is wrong')</script>";
        }
        else{
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
        
            echo "<script>alert('welcome')</script>";
            echo("<script>window.location = './userdashboard';</script>");
        }
        
    }
    
}

?>
<html>
    <head>
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous">
            
            <link rel="stylesheet"  href="./styles/login-index.css"/>
            
    </head>

    <body>
        <div class="container-fluid bg-dark" id="top-bar"></div>
        <div class="container-sm mt-1">
            <div class="row d-flex flex-column align-content-center ">
                <div class="col-6 bg-success rounded-2" id="box-top-bar">
                    <p>LOGIN</p>
                </div>
                <div class="col-6" id="box"> 
                    <form class="mt-2 d-flex flex-column" method="post">
                        <div class="form-group" >
                            <label for="login-username">Username</label>
                            <input type="text" name="username" class="form-control" id="login-username" 
                                placeholder="enter your user name"/>
                        </div>
                        <div class="form-group mt-2">
                            <label for="login-password">Password</label>
                            <input type="text" name="password"  class="form-control" id="login-password" 
                                placeholder="enter your password"/>
                        </div>
                        <button type="submit" name="submit" class="btn w-50 btn-primary mt-2">login</button>
                    </form>
                    <div class="row">
                        <div class="col-12 col-md-7" style="text-align:center;">
                            <a href="./signup">Dont have an account ?</a>
                        </div>
                        <div class="col-12 col-md-5" style="text-align:center;">
                            <a href="./admin-login.php">Admin login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous">
    </script>
</html>