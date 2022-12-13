module.exports = function(application){
    application.get('/', function(req, res){
      application.controllers.news.index(application, req, res);
    });
  }