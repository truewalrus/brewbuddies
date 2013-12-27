


module.exports = function(app, database) {

	app.get('/favicon.ico', function(request, response) {
		response.send(404);
	});

	app.get('*', function(request, response) {
		console.log('Sending index.html (%s)', request.url);
		response.sendfile('app/index.html');
	});
	
}