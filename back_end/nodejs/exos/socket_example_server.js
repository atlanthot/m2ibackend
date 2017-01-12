
function cacahueteFromClientHandler(socket, data)
{
	var num_cacahuete = parseInt(data);
	
	if( isNaN( num_cacahuete ) )
	{
		num_cacahuete = 0;
	}
	else
	{
		num_cacahuete++;
	}
	
	console.log("nombre de cacahuetes = "+num_cacahuete);
	
	socket.emit('cacahuete_from_server', num_cacahuete );
}

function connectHandler(socket)
{	
	console.log("un utilisateur veut se connecter par le biais d'une socket");
	socket.on("cacahuete_from_client",cacahueteFromClientHandler.bind( this,socket) );
	// socket.on("disconnect", closeHandler.bind(this, socket) );
	// socket.emit("server_version", SERVER_VERSION );
};

var http 				= require('http');
var socketio 			= require('socket.io');
var server 				= http.createServer();
var io 					= socketio.listen(server);


server.listen(3000); 
io.sockets.on('connection', connectHandler );
