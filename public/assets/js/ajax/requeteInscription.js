function appelAjax(event) {
event.preventDefault();

  console.log('coucou2');



    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let mail = document.getElementById('mail').value;
    let password = document.getElementById('password').value;
    let password2 = document.getElementById('password2').value;

    let message = document.getElementById('message');
    

    const requete = new XMLHttpRequest();
  
    requete.open('POST', './src/traitementAjax/traitementInscription.php', true);
    requete.setRequestHeader('content-type', 'application/json'); 
  
    requete.send(JSON.stringify({
      nom: nom,
      prenom: prenom,
      mail: mail,
      password: password,
      password2: password2}));
  
    requete.onreadystatechange = function() {
  
      if (requete.readyState === 4 && requete.status === 200) {
        reponse.innerHTML += JSON.parse(requete.responseText); 
  
      }
    }
  }