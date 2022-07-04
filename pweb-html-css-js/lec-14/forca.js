var palavras = ['casa', 'gato', 'luz', 'cachorro', 'alemanha'];
var palavraSorteada;
var palavraSecreta = ""; // ex.: gato => ****
var letrasTentadas = [];
var letrasAcertadas = [];
var chances = 5;
var erros = 0;

function sortearPalavra(){
    palavraSorteada = palavras[Math.floor(Math.random() * palavras.length)]
}

function ocultarPalavra(){
    for(let i = 0; i<palavraSorteada.length; i++){
        palavraSecreta += '*';
    }
}

function atualizarJogo(){
    var palavraVisivel = "";
    for(let i = 0; i<palavraSorteada.length; i++){
        if(letrasAcertadas.includes(palavraSorteada[i])){
            palavraVisivel += palavraSorteada[i];
        } else {
            palavraVisivel += '*';
        }
    }

    document.getElementById("palavra-secreta").textContent = palavraVisivel;
}

function verificarTentativa(){
    let tentativa = document.getElementById("tentativa").value;
    var mensagem = document.getElementById("mensagem");
    if(tentativa.length > 1){ // Usuário tentou uma palavra
        if(tentativa == palavraSorteada)
            mensagem.textContent = "Você acertou!";
        else
            mensagem.textContent = "Você errou!";
    } else {
        verificarLetraNaPalavra(tentativa);
    }
    atualizarJogo();
}

function verificarLetraNaPalavra(tentativa){
    if(!letrasTentadas.includes(tentativa)){
        letrasTentadas.push(tentativa);
    } else {
        mensagem.textContent = "Você já tentou essa letra.";
        return;
    }

    for(let i = 0; i<palavraSorteada.length; i++){
        if(tentativa == palavraSorteada[i]){
            letrasAcertadas.push(tentativa);
            var existe = true;
        }
    }

    console.log(existe);
    if(!existe){
        erros++;
        desenharForca();
        console.log(erros);
    }
}

function desenharForca(){
    var forca = document.getElementById("forca");
    console.log(erros);
    switch(erros){
        case 1:
            forca.innerText = "O";
            break;
        case 2:
            forca.innerText = "O-";
            break;
        case 3:
            forca.innerText = "O-<";
            break; 
        case 4:
            forca.innerText = "O-<-";
            break;
        case 5:
            forca.innerText = "O-<-<";
            mensagem.innerText = "Você morreu!";
            break;
    }
}

function play(){
    sortearPalavra();
    ocultarPalavra();
    atualizarJogo();
}

play();