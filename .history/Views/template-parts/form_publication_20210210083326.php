<form method="POST" id="formFR" enctype="multipart/form-data" class="hide">
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