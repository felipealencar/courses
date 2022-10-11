var express = require('express');

var app = express();

app.get('/', function(request, response){
    response.send('Olá, 923!');
});
 
app.listen(8000, function() {
    console.log('Servidor usando express executando.');
});
