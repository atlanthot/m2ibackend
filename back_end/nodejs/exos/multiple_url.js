var http = require('http'); 
var url = require('url');
var querystring = require('querystring');
var server = null;
var filesystem = require('fs');

function javascriptFileHandler(response, err, data)
{
	console.log(response, err,data);
	response.writeHead(200, {'Content-Type': 'text/javascript'}); 
	response.write(data); 
	response.end();
}

function requestHandler(request, response) 
{ 
	var params = querystring.parse(url.parse(request.url).query);
	var page = url.parse(request.url).pathname;
	var query = url.parse(request.url).query;
	
	
	if( page == '/helloworld')
	{
		filesystem.readFile('helloworld.js', 'utf8', javascriptFileHandler.bind(this, response) );
	}
	else
	{
		response.writeHead(404, {'Content-Type': 'text/javascript'}); 
		response.end();
	}
	
}

server = http.createServer();
server.on('request', requestHandler );
server.listen(3000);  