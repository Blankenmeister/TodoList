function appelAjax(event) {
event.preventDefault();

  // console.log('coucou2js');



    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let password2 = document.getElementById('password2').value;

    let message = document.getElementById('message');
    

    const requete = new XMLHttpRequest();
  
    requete.open('POST', './src/traitementAjax/traitementInscription.php', true);
    requete.setRequestHeader('content-type', 'application/json'); 
  
    requete.send(JSON.stringify({
      nom: nom,
      prenom: prenom,
      email: email,
      password: password,
      password2: password2}));
  
    requete.onreadystatechange = function() {
  
      if (requete.readyState === 4 && requete.status === 200) {
        message.innerHTML += JSON.parse(requete.responseText); 
        
      }
    }
  }