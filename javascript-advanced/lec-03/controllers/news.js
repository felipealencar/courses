module.exports.index = function(application, req, res) {
    var newsModel = new application.models.news();
  
    newsModel.getLastNews(function(err, result) {
      res.render("news/index", {news : result});
    });
  }