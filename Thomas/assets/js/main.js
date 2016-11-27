// Drop function
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
		obj = JSON.parse(reader.result);
		makeTable(obj);
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

function readyStateHandler(event){
	var monObjetAjax = event.target;
	var data = null;
	var obj = null;
	if( monObjetAjax.readyState == 4 && monObjetAjax.status == 200 ){
		data = monObjetAjax.responseText;
		obj = JSON.parse(data);
	}
}
// --------------------------------------------------------------------------------------------------------------//
// Heritage 
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

function instanceHeritage(){
	faireHeriter(Personnage, Wizard);
	faireHeriter(Personnage, Warrior);
	faireHeriter(Personnage, Ennemy);
	faireHeriter(Item, LifePotion);
	faireHeriter(Item, ManaPotion);
	faireHeriter(Item, Weapon);
	faireHeriter(Item, MagicWand);
	faireHeriter(PNJ, Marchand);
}
// --------------------------------------------------------------------------------------------------------------//
// affichage
function makeTable(obj){
	var container = document.getElementById("container");
	var title = obj.title;
	var dtd = obj.dtd;
	var array = obj.array;
	var html = '';

	html += '<table>';
	html += '<caption>'+ title + '</caption>';
	html += '<tr>';
	
	for( var i = 0; i < dtd.length; i++ ){
		html += "<th>" + dtd[i] + "</th>";
	}
	
	html += '</tr>';
	
	for( i = 0; i < array.length; i++ ){
		html += '<tr>';
		
		for( prop in array[i] ){
			html += '<td>' + array[i][prop] + '</td>';
		}
		
		html += '</tr>';
	}
		html += '</table>';
		
	html += '</table>';
	container.innerHTML = html;
}

// debug utility 
function combat(){
	var classArray = loadFile("assets/class.json");
	// var warriorWeapon = loadFile("assets/warriorWeapon.json");
	// var wizardWeapon = loadFile("assets/wizardWeapon.json");

	var player1 = new Wizard(classArray.array[1]);
	var player2 = new Warrior(classArray.array[0]);
	
	var token1 = Math.floor(Math.random() * ( warriorWeapon.array.length - 1) );
	var token2 = Math.floor(Math.random() * ( warriorWeapon.array.length - 1) );
	var token3 = Math.floor(Math.random() * ( wizardWeapon.array.length - 1 ) );
	
	var arme1 = warriorWeapon.array[token1];
	var arme2 = warriorWeapon.array[token2];
	var arme3 = wizardWeapon.array[token3]; 
	
	player2.setWeaponRight( new Weapon(arme1) );
	player2.setWeaponLeft( new Weapon(arme2) );
	player1.setWandstick( new MagicWand(arme3) );

	console.log("*********************************************************");
	while( !player1.isDead() && !player2.isDead() ){
		console.log(player2.nom, ":", player2.getPv(), "PV |", player1.nom, ":", player1.getPv(), 'PV -', player1.getMana(),"PM");
		player1.attack(player2);
		if(player2.isDead()){
			break;
		}

		player2.attack(player1);
		
		console.log("-------------------------------------------------------");
	}
	console.log("Mort de", player2.isDead() ? player2.nom : player1.nom);
	console.log("*********************************************************");
};
// -------------------------------------------------------------------------------------------------------------------------- //

function main(){
	instanceHeritage();
	
	var inputBox = document.getElementById("inputBox");
	var inputButton = document.getElementById("myFiles");
	
	inputButton.addEventListener("change", fileHandler);
	inputBox.addEventListener("dragover", hoverHandler);
	inputBox.addEventListener("drop", dropHandler);
	console.log("Run combat() ! but, it's not very effective")
}

window.addEventListener("load", main);