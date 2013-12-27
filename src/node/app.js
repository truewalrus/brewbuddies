var express = require('express');

module.exports = function() {
	var app = express();
	app.use(express.static(__dirname + '/app'));
	app.use(express.cookieParser());
	app.use(express.session({ secret: "keyboard cat" }));
	app.use(express.bodyParser());

	return app;
}