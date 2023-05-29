
aggiornaOpera();

function aggiornaOpera(){
  fetch("get_opera.php").then(responseAggiorna).then(onJSON);
}

function responseAggiorna(response){
  return response.json();
}

function onJSON(json){
  console.log(json);
  const container = document.getElementById('new_post');             
  container.className = 'operaa';

  console.log(json[0].content.immagine);

   
    for(let i in json){
      const items=json[i].content;
      console.log(items);
      const opera = document.createElement('div');
      opera.dataset.titolo=items.titolo;
      opera.dataset.immagine=items.immagine;
      opera.dataset.id=items.id;
    
      const titolo=items.titolo;    
      const immagine=items.immagine;
      
   

      const bottone=document.createElement('button');
      bottone.classList.add("didascalia");
      bottone.innerHTML='Elimina post';

      bottone.dataset.id=json[i].id;
      
      console.log(immagine);
      console.log(items);


      if(immagine){

          const o=document.createElement('div');
          const img=document.createElement('img');

         

          img.src=immagine;
          const didascalia=document.createElement('span');
          didascalia.textContent=titolo;
          didascalia.classList.add("didascalia");
        
          o.appendChild(img);
          o.appendChild(didascalia);
          o.appendChild(bottone);
          opera.appendChild(o);
          container.appendChild(opera);
          bottone.addEventListener("click", eliminaOpera);

      }
    }


}

function eliminaOpera(event){
    console.log("Eliminazione");
    const opera=event.currentTarget;
    console.log(opera);
    const formData = new FormData();
    formData.append('id',opera.dataset.id);
    console.log(opera.dataset.id);
    console.log(formData);
    fetch("elimina_opera.php", {method: 'post', body: formData}).then(aggiornaPagina);
}


function aggiornaPagina(){
  location.reload();
}






aggiornaEvento();

function aggiornaEvento(){
  
  fetch("get_event.php").then(responseAggiornaEv).then(onJSONev);
}

function responseAggiornaEv(response){
  return response.json();
}

function onJSONev(json){
  console.log(json);
  const container = document.getElementById('new_event');             
  container.className = 'event';

  console.log(json[0].content.immagine);

   
    for(let i in json){
      const items=json[i].content;
      console.log(items);
      const evento = document.createElement('div');
      evento.dataset.immagine=items.immagine;
      evento.dataset.nome=items.nome;
      evento.dataset.data=items.data;
      evento.dataset.luogo=items.luogo;
       
      const immagine=items.immagine;
      const nome=items.nome;
      const data=items.data;
      const luogo=items.luogo;
      
   

      const bottone=document.createElement('button');
      bottone.classList.add("didascalia");
      bottone.innerHTML='Elimina post';

      bottone.dataset.id=json[i].id;
      
      console.log(immagine);
      console.log(items);


      const o=document.createElement('div');
          
      const img=document.createElement('img');
      img.src=immagine;     

      const didascalia=document.createElement('span');
      didascalia.textContent=data;
      didascalia.classList.add("didascalia");

      const nome_artista=document.createElement('span');
      nome_artista.textContent=nome;
      nome_artista.classList.add("nome_artista");

      const luogo_evento=document.createElement('span');
      luogo_evento.textContent=luogo;
      luogo_evento.classList.add("luogo_evento");

      o.appendChild(img);
      o.appendChild(nome_artista);
      o.appendChild(didascalia);
      o.appendChild(luogo_evento);
      o.appendChild(bottone);
      container.appendChild(o); 

      bottone.addEventListener("click", elimina_evento);

      
    }
}

function elimina_evento(event){
  console.log("Eliminazione");
  const evento=event.currentTarget;
  console.log(evento);
  const formData = new FormData();
  formData.append('id',evento.dataset.id);
  console.log(evento.dataset.id);
  console.log(formData);
  fetch("elimina_evento.php", {method: 'post', body: formData}).then(aggiornaPagina);
}




