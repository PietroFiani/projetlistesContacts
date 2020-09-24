<form method="post" action="updateInfos.php">

  <div class="form-group">
    <label for="formGroupInputNom">Nom</label>
    <input type="text" class="form-control" id="formGroupInputNom" placeholder="Nom" name="lastname">
  </div>
  <div class="form-group">
    <label for="formGroupInputPrenom">Prénom</label>
    <input type="text" class="form-control" id="formGroupInputPrenom" placeholder="Prénom" name="firstname">
  </div>
  <div class="form-group">
    <label for="formGroupInputMail">Email</label>
    <input type="text" class="form-control" id="formGroupInputMail" placeholder="Email" name="mail">
  </div>
  <div class="form-group">
    <label for="formGroupInputTel">Téléphone</label>
    <input type="text" class="form-control" id="formGroupInputTel" placeholder="Téléphone" name="phone">
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
    <button type="submit">Enregister contact</button>
  </div>
</form>