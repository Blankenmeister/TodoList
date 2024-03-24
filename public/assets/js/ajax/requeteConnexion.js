function AjaxConnexion(event) {
    event.preventDefault();
    

        let emailConnexion = document.getElementById('emailConnexion').value;
        let passwordConnexion = document.getElementById('passwordConnexion').value;

        let message = document.getElementById('messageConnexion');


    
        // let message = document.getElementById('message');
        const requete = new XMLHttpRequest();
      
        requete.open('POST', './src/traitementAjax/traitementConnexion.php', true);
        requete.setRequestHeader('content-Type', 'application/json'); 
      
        requete.send(JSON.stringify({
          emailConnexion: emailConnexion,
          passwordConnexion: passwordConnexion}));
      
        requete.onreadystatechange = function() {
      
          if (requete.readyState === 4 && requete.status === 200) {
            message.innerHTML += JSON.parse(requete.responseText); 
            window.location.href = 'profil.php';
            
          }
        }
      }