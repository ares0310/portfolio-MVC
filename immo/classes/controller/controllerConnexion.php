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
    require_once "../utils/utils.php";

    ViewTemplate::menu();
    if (isset($_POST["connexion"])) {
        $mail = $_POST["mail"];
        // var_dump($_POST["mail"]);
        $table = ModelUser::getEmail($_POST["mail"]);
        // var_dump($table[$_POST["mail"]]);

        if(isset($table["mail"])){
            // var_dump($table['password']);
            if(password_verify($_POST["password"], $table["pass"])){
                if($table["actif"]==1 && $table["confirme"]==1){
                    ViewTemplate::alert("Connexion effectuée", "primary", "Accueil.php");
                $_SESSION["mail"] = $mail;
                } else {
                    ViewTemplate::alert("Compte inactif", "danger", "confirmationMail.php");
                }
                
            } else {
                ViewTemplate::alert("Connexion impossible", "danger", "Accueil.php");
            }
        } else {
            ViewTemplate::alert("Connexion Impossible car mail introuvable", "danger", "Accueil.php");
        }
    } else {
        ViewUser::connexionForm();
    }
    ViewTemplate::footer();

    

    ?>








    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/all.min.js"></script>
    <script src="../../js/ctrl.js"></script>
    <!-- ALL JS FILES -->
    <script src="../../js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../../js/custom.js"></script>
    <script src="../../js/portfolio.js"></script>
    <script src="../../js/hoverdir.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
</body>

</html>