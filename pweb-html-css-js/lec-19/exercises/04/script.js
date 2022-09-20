let resposta = Math.floor(Math.random() * 10);
function adivinha(numero){
    
    function verifica(tentativa){
        
        let tentativas = [];
        tentativas.push(tentativa);
        console.log(resposta);
        if(tentativa > resposta){
            console.log("Seu chute foi acima.");
        } else if(tentativa < resposta){
            console.log("Seu chute foi abaixo.");
        } else {
            console.log("Acertou!");
        }
    }

    return verifica(numero);
}

adivinha(5);

adivinha(4);

adivinha(3);