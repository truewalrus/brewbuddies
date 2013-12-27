var mysql = require('mysql');

var DBConnection = function(dbconfig) {
	this.pool  = mysql.createPool(dbconfig);
}

module.exports = DBConnection;
	
/*
pool.getConnection(function(error, connection) {
	connection.query('SELECT * from beer', function(error, rows) {
		for (var i = 0; i < rows.length; i++) {
			console.log(rows[i]);
		}
		connection.release();
	});
});
*/