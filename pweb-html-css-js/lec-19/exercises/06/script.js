function repeat(string, repeticoes, callback){
  for(i=0; i<repeticoes; i++){
    callback(string);
  }
}

function imprimir(string){
  console.log(string);
}

repeat("913", 10, imprimir);