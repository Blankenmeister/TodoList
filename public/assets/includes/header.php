
<header>
<nav class="navbar navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php#">
      <img src="./public/assets/image/logoBlanc.svg" alt="Logo" width="40" height="30" class="d-inline-block align-text-top">
      TO-DO List
    </a>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">

  <button id="btnInscription" class="btn btn-outline-light me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#modalInscription">Inscription</button>
 
<!-- Modal Inscription -->


<div class="modal fade" id="modalInscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<!-- formulaire inscription -->
<form>
      <div class="input-group mb-3">
  <span class="input-group-text">Nom</span>
  <input type="text" class="form-control" id="nom" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text">Prénom</span>
  <input type="text" class="form-control" id="prenom" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text">Email</span>
  <input type="text" class="form-control" id="emailInscription" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text">Mot de passe</span>
  <input type="password" class="form-control" id="passwordInscription" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text">Répéter le mot de passe</span>
  <input type="password" class="form-control" id="password2Inscription" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
</div>

<!-- fin formulaire inscription -->

      <div class="modal-footer">
        
        <div id="buttonValider">
        <button class="btn btn-success" onclick="AjaxInscription(event)">Valider</button>
        <div id="message"></div>
        </div>
      </div>
      
    </div>
  </div>
</div>
</form>
<!-- fin Modal inscription -->


<button id="btnConnexion" class="btn btn-outline-light me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#modalConnexion">Connexion</button>
 
<!-- Modal Connexion -->

<div class="modal fade" id="modalConnexion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-Connexion" id="exampleModalLabel">Connexion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<!-- formulaire Connexion -->
<form>
      <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input type="text" class="form-control" id="emailConnexion" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Mot de passe</span>
  <input type="text" class="form-control" id="passwordConnexion" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        </div>
</form>
<!-- fin formulaire Connexion -->

      <div class="modal-footer">
        
        <div id="buttonValider">
        <button class="btn btn-success" onclick="AjaxConnexion(event)">Valider</button>
        <div id="messageConnexion"></div>
        </div>
      </div>
      
    </div>
  </div>
</div>
</form>
<!-- fin Modal Connexion -->

  
</div>
  </div>
</nav>
</header>
