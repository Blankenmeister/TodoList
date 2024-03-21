
<header>
<nav class="navbar navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./public/assets/image/logoBlanc.svg" alt="Logo" width="40" height="30" class="d-inline-block align-text-top">
      TO-DO List
    </a>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">

  <button id="btnInscription" class="btn btn-outline-light me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#modalInscription">Inscription</button>
 
<!-- Modal Inscription -->

<form action="src/traitement.php" method="post" onsubmit="return Validation();">
<div class="modal fade" id="modalInscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<!-- formulaire inscription -->
      <div class="input-group mb-3">
  <span class="input-group-text" id="nom">Nom</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="prenom">Prénom</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="mail">Email</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="password">Mot de passe</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="password2">Mot de passe</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        
      </div>

<!-- fin formulaire inscription -->
<div id="message"></div>
      <div class="modal-footer">
        
        <div id="buttonValider">
        <input class="btn btn-success" type="submit" onclick="appelAjax()" value="Valider">
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
<form action="src/traitement.php" method="post" onsubmit="return Validation();">
      <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Mot de passe</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
        </div>
</form>
<!-- fin formulaire Connexion -->

      <div class="modal-footer">
        
        <div id="buttonValider">
        <input class="btn btn-success" type="submit" value="Valider">
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- fin Modal Connexion -->

  
</div>
  </div>
</nav>
</header>
