var http = require('http'); 
var server = null;

function requestHandler(request, response) 
{ 
	response.writeHead(200, {'Content-Type': 'text/html'}); 
	response.write('hello world'); 
	response.end();
}

server = http.createServer();
server.on('request', requestHandler );
server.listen(3000);  