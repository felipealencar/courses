const Animal = require('../models/animais');

exports.list = (req, res) => {
    res.send("NÃO IMPLEMENTADO AINDA");
}

exports.show = (req, res) => {
    res.send(`NÃO IMPLEMENTADO: ${req.params.id}`);
}

exports.create = (req, res) => {
    res.send(`NÃO IMPLEMENTADO AINDA: animal create POST`);
}

exports.update = (req, res) => {
    res.send(`NÃO IMPLEMENTADO AINDA: animal update PATCH`);
}

exports.delete = (req, res) => {
    res.send(`NÃO IMPLEMENTADO AINDA: animal delete DELETE`);
}