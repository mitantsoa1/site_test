<form method="POST" id="formFR" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre:</label>
        <input type="text" class="form-control" id="titre" name="titre">
    </div>
    <div class="form-group">
        <textarea name="contenu" id="contenu" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" name="photo" id="photo">
    </div>
    <button name="btnPMlg" id="btnPMlg" class="btn btn-primary text-center col-sm-offset-2 col-sm-2 ">Publier</button>
</form>