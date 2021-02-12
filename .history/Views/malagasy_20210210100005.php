<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>malagasy</title>
    <?php 
        Controllers::includeCSS(["bootstrap.min","all","indexview","brands","sweetalert2.min","util","general"]);
    ?>
</head>
<body>
    <?php 
        Controllers::includeTemplate("nav.php");
    ?>
    <div class="marge"></div>

    <div class="container content_page">
            <button type="button" class="btn btn-info" id="publier_modal" data-toggle="modal" data-target="#Modal">Publier</button>
    
        <?php
    ////////////////////////////////////********************///////////////////////////////
        
            $_SESSION['matiere']='Malagasy';
        
    ///////////////////////////////////*********************////////////////////////////////
       
            
                $db = new Database();
                $tab = $db  ->select("matiere")
                            ->where('nom','=')
                            ->execute([$_SESSION['matiere']]);

                            $id_mat = $tab[0]->id_matiere;

                $table = $db->select("publication")
                            ->where("id_matiere","=")
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
    
        <div class="modal fade" id="Modal">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">commentaire</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <?php 
                            Controllers::includeTemplate("form_publication.php");
                        ?>
                    </div>
                    
                    <!--Modal footer -->

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <?php 
        Controllers::includeJS(["jquery","sweetalert2.min","all","bootstrap","brands.min","form-plugin","cours"]);
    ?>
</body>
</html>