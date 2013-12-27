


module.exports = function(app, database) {

	app.get('/api/beers/:terms', function(request, response) {
		var terms = request.params.terms.split(" ");
		var results = [];
		
		if (terms.length == 0) response.send(results);
		
		// make query
		
		var query_string = "SELECT b.name AS beerName, br.name AS breweryName, t.name AS beerType, p.picture_url as pictureUrl " +
		"FROM beer b " +
		"JOIN brewery br ON b.brewery_id = br.id " +
		"JOIN type t ON b.type_id = t.id " +
		"JOIN post p ON b.id = p.beer_id " +
		"WHERE b.name LIKE '%" + terms[0] + "%'";
		
		var counter = 1;
		if (terms.length > 1) {
			query_string += " OR b.name LIKE '%" + terms[counter] + "%'";
			counter++;
		}
		
		// execute query
		database.pool.getConnection(function(error, connection) {
			connection.query(query_string, function(error, rows) {
				if (error) {
					response.send(error);
				} else {
					for (var i = 0; i < rows.length; i++) {
						results.push(rows[i]);
					}
				}
				connection.release();
				
				// return results of query
				response.send(results);
			});
		});
	});


	app.get('/favicon.ico', function(request, response) {
		response.send(404);
	});

	app.get('*', function(request, response) {
		console.log('Sending index.html (%s)', request.url);
		response.sendfile('app/index.html');
	});
	
}