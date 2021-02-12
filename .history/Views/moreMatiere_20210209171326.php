<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Publics/vendor4/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Publics/vendor4/font-awesome4/css/font-awesome.css">
    <link rel="stylesheet" href="Publics/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container moreMatiere_container">
        <?php
            include_once('Models/Database.class.php');
            $db = new Database();
            Database::init("localhost","eselas","root","");

            $tab = $db->selectSP()
                        ->from("matiere")
                        ->executeSP();
                
                for($i=0;$i<count($tab);$i++){
                    echo '<a href="'.strtolower($tab[$i]->nom) .'" class="btn btn-info">'.$tab[$i]->nom.'</a>';
                }
        ?>  
    </div>;
<script src="Publics/js/jquery.min.js"></script>
<script src="Publics/js/bootstrap.min.js"></script>
<script src="Publics/js/main.js"></script>
</body>
</html>
