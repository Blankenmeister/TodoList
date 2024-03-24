function AjaxTask(event) {
    event.preventDefault();
    
      console.log('coucou5Task');
    
    
    
        let titre = document.getElementById('titre').value;
        let description = document.getElementById('description').value;
        let date = document.getElementById('start').value;
    
        let message = document.getElementById('message');
        
    
        const requete = new XMLHttpRequest();
      
        requete.open('POST', './src/traitementAjax/traitementTask.php', true);
        requete.setRequestHeader('content-Type', 'application/json'); 
      
        requete.send(JSON.stringify({
          titre: titre,
          description: description,
          date: date
          }));
      
        requete.onreadystatechange = function() {
      
          if (requete.readyState === 4 && requete.status === 200) {
            message.innerHTML += JSON.parse(requete.responseText); 
            // window.location.href = 'index.php';
          }
        }
      }