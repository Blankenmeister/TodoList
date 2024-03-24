function AjaxInscription(event) {
event.preventDefault();

  // console.log('coucou2js');



    let nom = document.getElementById('nom').value;
    let prenom = document.getElementById('prenom').value;
    let emailInscription = document.getElementById('emailInscription').value;
    let passwordInscription = document.getElementById('passwordInscription').value;
    let password2Inscription = document.getElementById('password2Inscription').value;

    let message = document.getElementById('message');
    

    const requete = new XMLHttpRequest();
  
    requete.open('POST', './src/traitementAjax/traitementInscription.php', true);
    requete.setRequestHeader('content-Type', 'application/json'); 
  
    requete.send(JSON.stringify({
      nom: nom,
      prenom: prenom,
      emailInscription: emailInscription,
      passwordInscription: passwordInscription,
      password2Inscription: password2Inscription}));
  
    requete.onreadystatechange = function() {
  
      if (requete.readyState === 4 && requete.status === 200) {
        message.innerHTML += JSON.parse(requete.responseText); 
        window.location.href = 'index.php';
      }
    }
  }