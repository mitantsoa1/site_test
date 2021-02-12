<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>malagasy</title>
    <link rel="stylesheet" href="Publics/vendor4/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Publics/vendor4/font-awesome4/css/font-awesome.css">
    <link rel="stylesheet" href="Publics/css/francais.css">
    <link rel="stylesheet" href="Publics/css/general.css">
</head>
<body>
    <div class="container">
   
    
    <?php
////////////////////////////////////********************///////////////////////////////

        $_SESSION['matiere']='Malagasy';


///////////////////////////////////*********************////////////////////////////////
      ?>    
          
    
           <form action="publierMlg" method="POST" id="formFR" enctype="multipart/form-data" class="hide">
            <div class="form-group">
                <label for="titre">Titre:</label>
                <input type="text" class="form-control" id="titre" name="titre">
            </div>
            <div class="form-group">
                <textarea name="contenu" id="contenu" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo">
            </div>
            <button name="btnPMlg" id="btnPMlg" class="btn btn-danger">Publier</button>
        </form>
        <?php
        
            include_once "Models/Database.class.php";
            include_once 'Controls/Controllers.class.php';
            $db = new Database();
            $tab = $db  ->select("matiere")
                        ->where('nom','=')
                        ->execute([$_SESSION['matiere']]);

                        $id_mat = $tab[0]->id_matiere;

            $table = $db->select("publication")
                        ->where("id_matiere","=")
                        ->order("id", "DESC")
                        ->execute([$id_mat]);

            // var_dump($table);exit;
            for($i=0;$i<count($table);$i++){

                echo '<div class= "'.$table[$i]->categorie.'">
                    <table class= "'.$table[$i]->categorie.'">
                        <tr  class ="'.$table[$i]->categorie.'">
                              <td class="text-muted date">'.$table[$i]->date.'</td>
                        </tr >
                        <tr  class="date">
                              <td class="text-muted date">'.$table[$i]->categorie.'</td>
                        </tr >
                        <tr  class="date">
                              <td class="date"> Titre: <h4 class="titre4">'.$table[$i]->titre.'</h4></td>
                        </tr>
                        <tr  class="date">
                            
                            <td class="date"><span class="contenu">'.$table[$i]->contenu.'</span></td>
                        </tr> 
                        <tr  class="date">
                            <td class="date">
                                <img src="Publics/images/'.$table[$i]->photo.'" alt="" class="img-fluid">
                            </td>
                        </tr>
                        
                    </table>
            </div>';
            // $_SESSION['titre'] = $table[$i]->titre;  
            //   <tr  class="commentaire">
            //                 <td>
            //                     <button onclick="envoyer('.$table[$i]->id.')"><i class="fa fa-comment fa-2x"></i></button>
            //                 </td>
            //             </tr>  
            }
            

        ?>
        </div>

        <!-- commentaire
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div id="reception"></div>
                <div id="imgR"></div>
            </div>
            <div class="col-md-4">
            <span id="lienComment"></span>
                <div id="commentaire"></div>
            </div>
        </div>
    </div> -->
        <div class="modal" id="commentaireModal">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">commentaire</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <textarea class="form-control" id="commentContent" name="commentContent" id="commentContent" placeholder="Entrer votre commentaire"></textarea>
                            </div>

                            <?php
                        
                                include_once "Models/Database.class.php";
                                include_once 'Controls/Controllers.class.php';
                                $db = new Database();

                                $tab = $db  ->select("matiere")
                                            ->where('nom','=')
                                            ->execute([$_SESSION['matiere']]);

                                            $id_mat = $tab[0]->id_matiere;

                                $table = $db->select("publication")
                                            ->where("id_matiere","=")
                                            ->order("id", "DESC")
                                            ->execute([$id_mat]);

                                // var_dump($table);exit;
                                if(count($table)>0){
                                    //  echo' <button type="button" class="btn btn-info" data-dismiss="modal" id="btnCommenter" name="btnCommenter">commenter</button>';
                                //     for($i=0;$i<count($table);$i++){
                                
                                // }
                                }
                        
                            ?>
                        
                        </form>
                    </div>
                    
                    <--Modal footer -->

                    <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>