var express = require('express');
var consign = require('consign');

var app = express();
app.set('view engine', 'ejs');
app.set('views', './views');

consign()
  .include('routes')
  .then('models')
  .then('controllers')
  .into(app);

app.listen(3000, function(){
  console.log('APP rodando na porta 3000');
});