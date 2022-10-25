const mongoose = require("mongoose");

const Schema = mongoose.Schema;

const AnimaisSchema = new Schema({
    nome: {type: String, required: true}
});

AnimaisSchema.virtual("url").get(function() {
    return `/animais/${this._id}`;
});

module.exports = mongoose.model("Animal", AnimaisSchema);