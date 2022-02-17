var express = require('express');
var MongoClient = require('mongodb').MongoClient;
var app = express();

app.use(express.static('public'));

MongoClient.connect('mongodb+srv://admin:<password>@cluster0.jqvpq.mongodb.net/pweb?retryWrites=true&w=majority', function(err, client){
    if (err) throw err;

    let db = client.db('pweb');
    db.collection('discentes').find().toArray(function (err, result) {
        if (err) throw err;
        console.log(result);
    });
});

app.get('/', function(req, res) {
  res.send('Olá, turma de PWEB1!');
});

app.listen(3000, function() {
  console.log('App de Exemplo escutando na porta 3000!');
});
