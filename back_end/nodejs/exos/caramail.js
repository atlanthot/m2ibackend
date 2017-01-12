
function messageClientHandler(data)
{
	console.log("le client envoie: ", data);
	messages.push(data);
	io.emit('all_messages', messages);
}


function connectHandler(socket)
{	
	console.log("un utilisateur veut se connecter par le biais d'une socket");
	
	socket.on('message_from_client', messageClientHandler);
	socket.emit('connection_ok', {});
	io.emit('all_messages', messages);
	
	
	//socket.on("data_from_client",dataFromClientHandler.bind( this,socket) );
};

var messages			= new Array();
var http 				= require('http');
var socketio 			= require('socket.io');
var server 				= http.createServer();
var io 					= socketio.listen(server);


server.listen(3000); 
io.sockets.on('connection', connectHandler );
