var http = require('http');
 
http.createServer(function(request, response) {
    response.writeHead(200, {
        'Content-Type': 'text'
    });
    response.end('Olá, 923!');
}).listen(8000, '127.0.0.1');

console.log("Servidor executando.");