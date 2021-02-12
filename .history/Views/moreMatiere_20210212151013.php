<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        Controllers::includeCSS(["bootstrap.min","all","indexview","brands","sweetalert2.min","util","general"]);
    ?>
</head>
<body>
    <div class="container moreMatiere_container m-t-50">
        <?php
            $db = new Database();

            $tab = $db->select("matiere")
                        ->execute(null);
                
                for($i=0;$i<count($tab);$i++){
                    echo '<a href="'.strtolower($tab[$i]->nom) .'" class="btn btn-info">'.$tab[$i]->nom.'</a>';
                }
        ?>  
    </div>;
    <?php 
        Controllers::includeJS(["jquery","sweetalert2.min","all","bootstrap","brands.min","form-plugin","cours"]);
    ?>
</body>
</html>
