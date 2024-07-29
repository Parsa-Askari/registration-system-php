<?php 
include_once("./components/check-session.php");

?>
<html>
    <head>
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous">
        <link rel="stylesheet"  href="../styles/basic.css"/>
        <link rel="stylesheet"  href="../styles/udashboard-index.css" />
    </head>

    <body>
        
        <div class="container-fluid">
            <?php include_once("components/topbar.php")?>
            <div class="row">
                <?php include_once("components/sidebar.php")?>
                <div class="col-10 col-md-10">

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