const ObjectId = require('mongoose').Types.ObjectId;
const Animal = require('../models/animais');

exports.list = async (req, res) => {
    await Animal.find({}).exec(function(err, docs) {
        res.status(200).json(docs);   
    });
}

exports.show = (req, res) => {
    res.send(`NÃO IMPLEMENTADO: ${req.params.id}`);
}

exports.create = (req, res) => {
    const animalDocument = new Animal({
        nome: req.body.nome
    });
    animalDocument
        .save()
        .then(result => {
            res.status(201).json({ msg: 'Animal cadastrado com sucesso.'});
        })
        .catch(err => {
            res.status(500).json({ error: err });
        });
}

exports.update = async (req, res) => {
    const filter = { _id: new ObjectId(req.body.id) };
    console.log(filter);
    const update = { nome: req.body.nome };
    console.log(update);
    await Animal.findOneAndUpdate(filter, update).then(function (err, result) {
        console.log(req.body.nome);
        msg = "Animal atualizado com sucesso!";
        // res => response => resposta 
        res.msg = msg;
        exports.list(req, res);
    });
}

exports.delete = async (req, res) => {
    var msg;
    await Animal.findOneAndDelete({ _id: new ObjectId(req.params.animalId) }).then(function (err, data) {
        msg = "Animal excluído com sucesso!";
        res.msg = msg;
        exports.list(req, res);
    });
}