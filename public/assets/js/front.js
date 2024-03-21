// let modalInscription = document.getElementById('modalInscription');
// let btnInscription = document.getElementById('btnInscription');

// modalInscription.addEventListener('shown.bs.modal', function () {
//     btnInscription.focus();
// // })

// let modalInscription = new bootstrap.Modal(document.getElementById('modalInscription'));

// document.getElementById('btnInscription').addEventListener('click', function () {
//     modalInscription.show();
// });

function Validation(){


    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let mail = document.getElementById('mail').value;
    let password = document.getElementById('motDePasse').value;
    let password2 = document.getElementById('motDePasse2').value;
    let message = document.getElementById('message');
  
    if (nom.length === 0 || prenom.length === 0 || mail.length === 0 || password.length === 0 || password2.length === 0 ) {
      message.textContent = "Tous les champs doivent être remplis.";
      message.classList.remove('succes');
      message.classList.add('echec');
      return false;
    } else {
      return true;
    }
  }