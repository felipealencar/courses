const ObjectId = require('mongoose').Types.ObjectId;
const Animal = require('../models/animais');

exports.list = async (req, res) => {
    await Animal.find({}).exec(function(err, docs) {
        res.render("animais/index", { animais : docs, msg : res.msg});
    });
}

exports.show = (req, res) => {
    res.send(`NÃO IMPLEMENTADO: ${req.params.id}`);
}

exports.create = (req, res) => {
    if (req.method == "POST") {
        const animalDocument = new Animal({
            nome: req.body.nome
        });
        animalDocument
            .save()
            .then(result => {
                res.render("animais/create", { msg: 'Animal cadastrado com sucesso.' });
            })
            .catch(err => {
                res.status(500).json({ error: err });
            });
    } else {
        res.render('animais/create');
    }
}

exports.update = async (req, res) => {
    if(req.method == "POST"){
        const filter = { _id: new ObjectId(req.body.id) };
        console.log(filter);
        const update = { nome: req.body.nome };
        console.log(update);
        await Animal.findOneAndUpdate(filter, update).then(function (err, result) {
            console.log(req.body.nome);
            msg = "Animal atualizado com sucesso!";
            res.msg = msg;
            exports.list(req, res);
        });
    } else {
        await Animal.findOne({ _id : new ObjectId(req.params.animalId)}).then(function (result) {
            //console.log(result);
            res.render(`animais/update`, { doc : result });
        })
        
    }

}

exports.delete = async (req, res) => {
    var msg;
    await Animal.findOneAndDelete({ _id: new ObjectId(req.params.animalId) }).then(function (err, data) {
        msg = "Animal excluído com sucesso!";
        res.msg = msg;
        exports.list(req, res);
    });
}