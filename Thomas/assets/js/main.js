/*
function readyStateHandler(event){
	var monObjetAjax = event.target;
	
	if( monObjetAjax.readyState == 4 && monObjetAjax.status == 200 ){
		// code 200, tout est ok, code 404 : not found , 300 : donner mit en cache, 500 : erreur serveur 
		// code pour récupérer les données du ws et faire le traitement
		var data = monObjetAjax.responseText;
		var obj = JSON.parse(data);
		run(obj);
	}
}
*/
// Drag & Drop function 
function dropHandler(event){
	event.preventDefault();	
	
	var file = event.dataTransfer.files;
	var i = file.length;
	
	while( --i > -1 ){
		reader = new FileReader();
		reader.addEventListener("load", readHandler);	
		myFile = file[i];
		reader.readAsText(myFile);
	}
}

function hoverHandler(event){
	event.preventDefault();
	
}
// ----------------------------------------------------------------------------------------------------------------// 
// JSON parse & reader function
function readHandler(event){
	var reader = event.target;
	var obj = null;
	
	try{
		obj = JSON.parse( reader.result );
		run(obj);	
	}
	catch(error){
		console.log("Erreur: impossible de parser le fichier, le format .json n'est pas respecté.", error);
	}
}

function fileHandler(event){
	var mon_input 	= event.target;
	var i 			= mon_input.files.length;
	var myFile 		= null;
	var reader 		= null;
	
	while( --i > -1 ){
		reader = new FileReader();
		reader.addEventListener("load", readHandler);	
		myFile = mon_input.files[i];
		reader.readAsText(myFile);
	}
}
/*
function start(){
	var monObjetAjax = new XMLHttpRequest();
	monObjetAjax.addEventListener("readystatechange", readyStateHandler);
	monObjetAjax.open("GET","assets/data.json", true);
	monObjetAjax.send(null);
}
*/
function run(obj){
	var container = document.getElementById("container");
	var champs = obj["dtdArmeWarrior"];
	var armeWarrior = obj["armeWarrior"];
	var html = '';

	
	html += '<table>';
	html += '<caption>'+obj["titre"]+'</caption>';
	html += '<tr>';
	
	for( var i = 0; i < champs.length; i++ ){
		html += "<th>"+champs[i]+"</th>";
	}
	
	html += '</tr>';
	
	for( i = 0; i < armeWarrior.length; i++ ){
		html += '<tr>';
		
		for( prop in armeWarrior[i] ){
			html += '<td>'+armeWarrior[i][prop]+'</td>';
		}
		
		html += '</tr>';
	}
		html += '</table>';

	var champs = obj["dtdArmeWizard"];
	var armeWizard = obj["armeWizard"];
	
	html += '<table>';
	html += '<caption>'+obj["titre"]+'</caption>';
	html += '<tr>';
	
	for( var i = 0; i < champs.length; i++ ){
		html += "<th>"+champs[i]+"</th>";
	}
	
	html += '</tr>';
	
	for( i = 0; i <  armeWizard.length; i++ ){
		html += '<tr>';
		
		for( prop in  armeWizard[i] ){
			html += '<td>'+ armeWizard[i][prop]+'</td>';
		}
		
		html += '</tr>';
	}
	
	html += '</table>';
	container.innerHTML = html;
	combat(obj);
}

function faireHeriter(parentClass,childClass){
	var obj = new Object();
	var prop = null;
	
	for( prop in parentClass.prototype ){
		obj[prop] = parentClass.prototype[prop];
	}
	

	for( prop in childClass.prototype ){
		obj[prop] = childClass.prototype[prop];
	}
	
	childClass.prototype = obj;
}
// -------------------------------------------------------------------------------------------------------------------------- //
// debug utility 
function combat(obj){
	var player1 = new Wizard("Mère Theresa","Barde",50);
	var player2 = new Warrior("Robocop","Justicier");
	
	var token1 = Math.floor(Math.random() * ( obj.armeWarrior.length - 1) );
	var token2 = Math.floor(Math.random() * ( obj.armeWarrior.length - 1) );
	var token3 = Math.floor(Math.random() * ( obj.armeWizard.length - 1 ) );
	
	var arme1 = obj.armeWarrior[token1];
	var arme2 = obj.armeWarrior[token2];
	var arme3 = obj.armeWizard[token3];
	
	player2.setWeaponRight( new Weapon(arme1) );
	player2.setWeaponLeft( new Weapon(arme2) );
	player1.setWandstick( new MagicWand(arme3) );
	
	console.log("*********************************************************");
	while( !player1.isDead() && !player2.isDead() ){
		console.log(player2.nom, ":", player2.getPv(), "PV |", player1.nom, ":", player1.getPv(), 'PV -', player1.getMana(),"PM");
		player1.attack(player2);
		if( player2.isDead() ){
			break;
		}

		player2.attack(player1);
		
		console.log("-------------------------------------------------------");
	}
	console.log("Mort de", player2.isDead() ? player2.nom : player1.nom);
	console.log("*********************************************************");
};
function init(){
	faireHeriter(Personnage, Wizard);
	faireHeriter(Personnage, Warrior);
	faireHeriter(Personnage, Ennemy);
	faireHeriter(Item, LifePotion);
	faireHeriter(Item, ManaPotion);
	faireHeriter(Item, Weapon);
	faireHeriter(Item, MagicWand);
	faireHeriter(PNJ, Marchand);
}
//initialisation function
function main(){
	init();
	var inputBox = document.getElementById("inputBox");
	var inputButton = document.getElementById("myFiles");
	
	inputButton.addEventListener("change", fileHandler);
	inputBox.addEventListener("dragover", hoverHandler);
	inputBox.addEventListener("drop", dropHandler);
}

window.addEventListener("load", main);
