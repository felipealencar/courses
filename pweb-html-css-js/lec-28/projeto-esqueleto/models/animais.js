const mongoose = require("mongoose");

const Schema = mongoose.Schema;
const opts = { toJSON: { virtuals: true } };
const AnimaisSchema = new Schema({
        nome: { type: String, required: true }
    },
    opts
);

AnimaisSchema.virtual("url").get(function () {
    return `/animais/${this._id}`;
});

//Forçando que o nome da coleção seja utilizado em português (ao invés de inglês no plural)
module.exports = mongoose.model("animais", AnimaisSchema, "animais");

