<?php 
session_start();
set_include_path("../");
$pdo = include_once("helpers/databaseConfig.php");
include_once("helpers/databaseQuerys.php");

if(isset($_POST['submit']))
{
    if(!isset($_POST['email']) || !isset($_POST['username']) 
        || !isset($_POST['password']) || !isset($_POST['r_password']))
    {
        echo "pls write all the fields";
    }
    else{
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $r_password=$_POST['r_password'];
        $password_pattern="/^[a-zA-Z0-9]{8,}$/";
        $username_pattern="/^[a-zA-Z0-9]{4,}$/";
        
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            echo "<script>alert('email is invalid')</script>";
         
        }
        elseif(!preg_match($password_pattern,$password))
        {
            echo "<script>alert('password does not obey the rules')</script>";
        
        }
        elseif(!preg_match($username_pattern,$username))
        {
            echo "<script>alert('username does not obey the rules')</script>";
        
        }
        elseif($password!=$r_password)
        {
            echo "<script>alert('the repeated password is wrong')</script>";
        }
        else
        {
            
            $results=$users->select($pdo,$username);
            if(count($results)!=0)
            {
                echo "<script>alert('username already exists')</script>";
            }
            else{
                $users->insert($pdo,$username,$email,$password);
                echo "<script>alert('welcome')</script>";
                echo("<script>window.location = '../';</script>");
                
            }
            
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
        <link rel="stylesheet"  href="../styles/signup-index.css"/>
    </head>
    <body>
        <div class="container-fluid bg-dark" id="top-bar"></div>
        <div class="container-sm mt-1">
            <div class="row d-flex flex-column align-content-center ">
                <div class="col-6 bg-success rounded-2" id="box-top-bar">
                    <p>SIGN UP</p>
                </div>
                <div class="col-6" id="box"> 
                    <form class="mt-2 d-flex flex-column " method="post">
                        
                        <div class="form-group mb-2" >
                            <label for="sign-email">Email</label>
                            <input type="email" name="email" class="form-control" id="sign-email" 
                                placeholder="enter your email"/>
                        </div>
                    
                        <div class="form-group" >
                            <label for="sign-username">Username</label>
                            <input type="text" name="username" class="form-control" id="sign-username" 
                                placeholder="enter your user name" aria-describedby="user-desc"/>
                                <small id="user-desc" class="text-secondary">
                                    username must be more than 4 chars and can only wuth english letters and numbers
                                </small>
                        </div>
                        
                        <div class="form-group mt-2">
                            <label for="sign-password">Password</label>
                            <input type="text" name="password" class="form-control" id="sign-password" 
                                placeholder="enter your password" aria-describedby="pass-desc"/>
                            <small id="pass-desc" class="text-secondary">
                                username must be more than 8 chars and can only wuth english letters and numbers
                            </small>
                        </div>

                        <div class="form-group mt-2">
                            <label for="repeat-sign-password">Repeat Password</label>
                            <input type="text" name="r_password" class="form-control" id="repeat-sign-password" 
                                placeholder="enter your password" />
                        </div>
                        
                        <button type="submit" name="submit" class="btn w-50 btn-primary mt-2">sign up</button>
                    </form>
                    <div class="col-12" style="text-align:center;">
                        <a href="../index.php">already have an account ?</a>
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
    <script src="../scripts/script.js"></script>
</html>