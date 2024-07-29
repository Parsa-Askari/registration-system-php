<?php 
include_once("./components/check-session.php");

if(isset($_POST['submit']))
{
    set_include_path("../");
    $pdo = include_once("helpers/databaseConfig.php");
    include_once("helpers/databaseQuerys.php");
    include_once("helpers/utils.php");
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    $current_pass=$_POST['current-pass'];
    $new_pass=$_POST['new-pass'];
    $r_new_pass=$_POST['r-new-pass'];
    if($password!=$current_pass)
    {
        send_alert("current password is invalid");
    }
    elseif($new_pass!=$r_new_pass){
        send_alert("repeated password does not match with new password");
    }
    else{
        $users->update($pdo,$username,$new_pass);
        send_alert("your password has been changed succsessfully");
        $_SESSION['password']=$new_pass;
        change_window("./index.php");
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
        <link rel="stylesheet"  href="../styles/basic.css"/>
    </head>

    <body>
        
        <div class="container-fluid">
            <?php include_once("components/topbar.php")?>
            <div class="row">
                <?php include_once("components/sidebar.php")?>
                <div class="col-7 col-md-7 mt-5">
                    <h2 class="mb-4">
                        User Dashboard :
                        <small class="text-muted">Changing Password</small>
                    </h2>
                    <form method="post">
                        <label for="current-pass" class="form-label">your currrent password</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="sign1">></span>
                            <input type="text" name="current-pass" id="current-pass" class="form-control" placeholder="current password">
                        </div>

                        <label for="new-pass" class="form-label">your new password</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="sign2">></span>
                            <input type="text" name="new-pass" id="new-pass" class="form-control" placeholder="new password">
                        </div>

                        <label for="repeat-new-pass" class="form-label">repeat your new password</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="sign3">></span>
                            <input type="text" name="r-new-pass" id="repeat-new-pass" class="form-control" placeholder="reapeat password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mt-2">change</button>
                    </form>
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