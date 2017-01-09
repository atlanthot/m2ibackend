var http = require('http'); 
var url = require('url');
var querystring = require('querystring');
var EventEmitter = require('events').EventEmitter;
var server = null;

function tagazouHandler(data)
{
	console.log(data);
};

function requestHandler(request, response) 
{ 
	var dispatcher = new EventEmitter();
	console.log (query)
	console.log (request.url)
	var params = querystring.parse(url.parse(request.url).query);
	var page = url.parse(request.url).pathname;
	var query = url.parse(request.url).query;
	
	dispatcher.on('tagazou', tagazouHandler );
	dispatcher.removeListener('tagazou', tagazouHandler);
	dispatcher.emit('tagazou', {'tajazzou':'tagazou', 'ryan':'celine'});
	
	response.writeHead(200, {'Content-Type': 'text/html'}); 
	response.write('page = ' + page + " query = "+ query); 
	response.end();
}

server = http.createServer();
server.on('request', requestHandler );
server.listen(3000);  