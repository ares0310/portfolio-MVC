<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1  shrink-to-fit=no" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/all.min.css" />
    <link rel="stylesheet" href="../../css/styles.css" />
    <!-- <link rel="stylesheet" href="../../css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="../../css/all.min.css" />
    <!-- template ajout -->
    <link rel="stylesheet" href="../../css/style.css" /> 
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="../../photos/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../../photos/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Colors CSS -->
    <!-- <link rel="stylesheet" href="../../css/colors.css"> -->
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="../../css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="../../js/modernizer.js"></script>
<!-- FIN template ajout -->
    <title>HTML</title>
</head>

<body>
    
    <?php

    require_once "../model/modelUser.php";
    require_once "../view/viewUser.php";
    require_once "../view/viewTemplate.php";
    ViewTemplate::menu();
    if(isset($_SESSION["mail"])){
        // echo "bienvenu" . " " . $_SESSION["mail"];
        
            echo ("welcome: " . $_SESSION["mail"] . " <br>  <a style='color:white;' role='button' class='btn btn-danger' href='disconnect.php' >Logout</a> ");
    }
?>
<h1>Accueil</h1>
<?php
    ViewTemplate::footer();



    

    ?>








    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script>
</body>

</html>