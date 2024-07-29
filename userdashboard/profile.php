<?php 
include_once("./components/check-session.php");
$pdo=include_once("../helpers/databaseConfig.php");
include_once("../helpers/databaseQuerys.php");
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$user_data=$users->select($pdo,$username);
$email=$user_data['Mail'];
$edate=$user_data['Edate'];
?>
<html>
    <head>
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous">
        <link rel="stylesheet"  href="../styles/basic.css"/>
        <link rel="stylesheet"  href="../styles/uprofile.css" />
    </head>

    <body>
        <div class="container-fluid">
            <?php include_once("components/topbar.php")?>
            <div class="row">
                <?php include_once("components/sidebar.php")?>
                <div class="col-8 col-xl-8">
                    <div class="info">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fields</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Username</th>
                                    <td><?php echo $username ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Password</th>
                                    <td><?php echo $password ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td><?php echo $email ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Account Created AT</th>
                                    <td><?php echo $edate ?></td>
                                </tr>
                            </tbody>
                        </table>
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