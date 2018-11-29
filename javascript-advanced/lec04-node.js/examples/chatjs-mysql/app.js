var app = require('http').createServer(response);
var fs = require('fs');
var mysql = require('mysql');
var io = require('socket.io')(app);
var notes = []
var isInitNotes = false
var socketCount = 0

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "913-chatjs"
});

con.connect(function(err){
    if (err) console.log(err)
});
 
app.listen(3000);
console.log("App running…");

function response(req, res) {
	var file = "";
    if (req.url == "/") {
        file = __dirname + '/index.html';
    } else {
        file = __dirname + req.url;
    }
	
	fs.readFile(file,
	function (err, data) {
		if (err) {
			res.writeHead(500);
			return res.end('Falha ao carregar o arquivo index.html');
		}
		res.writeHead(200);
		res.end(data);
	});
}

io.on("connection", function(socket) {
    socket.on("message", function(sent_msg, callback) {
        sent_msg = "[ " + getCurrentDate() + " ]: " + sent_msg;
        io.sockets.emit("update messages", sent_msg);
        callback();
		var sql = "INSERT INTO messages (content) VALUES ('"+sent_msg+"')";
		con.query(sql, function (err, result) {
		if (err) throw err;
		console.log("1 linha inserida");
  });

    });
});

function getCurrentDate() {
    var currentDate = new Date();
    var day = (currentDate.getDate() < 10 ? '0' : '') + currentDate.getDate();
    var month = ((currentDate.getMonth() + 1) < 10 ? '0' : '') + (currentDate.getMonth() + 1);
    var year = currentDate.getFullYear();
    var hour = (currentDate.getHours() < 10 ? '0' : '') + currentDate.getHours();
    var minute = (currentDate.getMinutes() < 10 ? '0' : '') + currentDate.getMinutes();
    var second = (currentDate.getSeconds() < 10 ? '0' : '') + currentDate.getSeconds();
    return year + "-" + month + "-" + day + " " + hour + ":" + minute + ":" + second;
}