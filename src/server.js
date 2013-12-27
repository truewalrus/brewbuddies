var port = 1337;

//var fs = require('fs');
//var http = require('http');

var App = require('./node/app.js');

var Database = require('./node/database.js');
var dbconfig = require('./node/dbconfig.json');

var Routes = require('./node/routes.js');

var app = new App();
var database = new Database(dbconfig);
var routes = new Routes(app, database);

app.listen(port);
console.log('Listening on port %d.', port);