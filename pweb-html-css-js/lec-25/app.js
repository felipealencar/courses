const dotenv = require('dotenv');
dotenv.config();
const {MongoClient} = require('mongodb');
const urlMongo = `${process.env.URL_MONGO}`;
var mongoClent = new MongoClient(urlMongo);
var express = require('express');
var bodyParser = require('body-parser')
var app = express();
var path = require('path');

let dbConnection;

mongoClient.connect().then((client, err) => {
    if(err)
        console.log("Erro ao conectar no banco.");
    
    dbConnection = client.db("pweb");
    console.log("Conectado com sucesso.");
});

app.use(bodyParser.urlencoded({ extended: true}));

app.get('/', function(request, response){
    dbConnection.collection("animais")
    .find({}).toArray(function (err, result) {
        if (err) {
            response.status(400).send("Erro recuperando a listagem de animais!");
        } else {
            console.log(result);
            response.sendFile(path.join(__dirname, './public/', 'cadastro.html'), result);
        }
    });
});

app.post('/', function(request, response){
    console.log(request.body);
    const animalDocument = {
        nome: request.body.nome
    }
    dbConnection
        .collection("animais")
        .insertOne(animalDocument, function (err, result) {
            if(err) {
                response.status(400).send("Erro ao inserir o documento.");
            } else {
                console.log(`Inserido um animal com o id ${result.insertedId}`);
                response.status(204).send();
            }
        });
});
 
app.listen(8000, function() {
    console.log('Servidor usando express executando.');
});
