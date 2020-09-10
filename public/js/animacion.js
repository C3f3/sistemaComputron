function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }
  
 async function mostrarletra(nodo,array){
      nodo.innerHTML=array[0];

      for(var i=1;i<array.length;i++){
    
       nodo.innerHTML=nodo.innerHTML+array[i];
      await sleep(100);
      }
      await sleep(1000);
      
  }
  
async  function tipear(id){
    var selecionado = document.getElementById(id);
        var text=selecionado.innerHTML;
     
        var array = text.split('');
    
        for(var j = 1;j<10;j++){
            await mostrarletra(selecionado,array);
    }
    
  }

  document.onload =tipear("headline");
  document.onload = tipear("headline2");
  document.onload = tipear("headline3");
  document.onload = tipear("headline4");
  document.onload = tipear("headline5");
  document.onload = tipear("headline6");
  document.onload = tipear("headline7");
  document.onload = tipear("headline8");
