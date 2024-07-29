<?php 
    set_include_path("../");
    include_once("helpers/utils.php");
    if(isset($_GET["option"]))
    {
        
        send_alert("you loged out");
        change_window("..");
    }
?>

<div class="col-3 col-md-3">
    <div class="bg-dark d-flex flex-column " id="side-bar">
        <a class="nav-link option align-self-center" href="change_img.php" id="profile-img">
            <div class="img-box " id="avatar-box">
                <img id="avatar" src="../assets/avatar.png"/>
            </div>
        </a>
        
        
        <a class="nav-link option" href="profile.php" id="profile">
            Profile
        </a>

        <a class="nav-link option" href="." id="home" >
            Home
        </a>
        
        <a class="nav-link option" href="change-password.php" id="change-password">
            Change Password
        </a>

        <a class="nav-link option"  name ="logout" href=".?option=logout" id="logout">
            Log Out
        </a>
    </div>
</div>