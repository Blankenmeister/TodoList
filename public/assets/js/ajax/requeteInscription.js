function appelAjax() {

  
    let nom = document.getElementById('nom');
    let prenom = document.getElementById('prenom');
    let mail = document.getElementById('mail');
    let password = document.getElementById('password');
    let password2 = document.getElementById('password2');

    
    const requete = new XMLHttpRequest();
  
    requete.open('POST', './src/traitementAjax/traitementInscription.php', true);
    requete.setRequestHeader('content-type', 'application/json'); 
  
    requete.send(JSON.stringify({
      'nom': nom,
      'prenom': prenom,
      'mail': mail,
      'password': password,
      'password2': password2}));
  
    requete.onreadystatechange = function() {
  
      if (requete.readyState === 4 && requete.status === 200) {
        // reponse.innerHTML += JSON.parse(requete.responseText); à voir si besoin de faire
  
      }
    }
  }