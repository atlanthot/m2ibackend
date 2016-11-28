// Drop function
function dropHandler(event)
{
	event.preventDefault();	
	
	var reader 		= null;
	var tabFiles 	= event.dataTransfer.files;
	var i 			= tabFiles.length;
	
	console.log(tabFiles);
	
	while( --i > -1 )
	{
		reader = new FileReader();
		reader.addEventListener("load", readHandler);	
		
		reader.readAsText( tabFiles[i] );
	}
}

function hoverHandler(event)
{
	event.preventDefault();
}
// ----------------------------------------------------------------------------------------------------------------// 
// JSON parse & reader function
function readHandler(event)
{
	var reader 	= event.target;
	var obj 	= null;
	
	try
	{
		obj = JSON.parse(reader.result);
		makeTable(obj);
		combat(obj);
	}
	catch(error)
	{
		console.log("Erreur: impossible de parser le fichier, le format .json n'est pas respecté.", error);
	}
}





// affichage
function makeTable(obj)
{
	var container = document.getElementById("container");
	var title = obj.title;
	var dtd = obj.dtd;
	var array = obj.characters;
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
function combat(obj)
{
	var player1 = new Wizard(obj.characters[1]);
	var player2 = new Warrior(obj.characters[0]);
	
	
	var weapons = obj.weapons_warrior;
	var sticks = obj.weapons_wizard;
	
	var token1 = Math.floor(Math.random() * ( weapons.length - 1) );
	var token2 = Math.floor(Math.random() * ( weapons.length - 1) );
	var token3 = Math.floor(Math.random() * ( sticks.length - 1 ) );
	
	var arme1 = weapons[token1];
	var arme2 = weapons[token2];
	var arme3 = sticks[token3]; 
	
	player2.setWeaponRight( new Weapon(arme1) );
	player2.setWeaponLeft( new Weapon(arme2) );
	player1.setWandstick( new MagicWand(arme3) );

	console.log("*********************************************************");
	while( !player1.isDead() && !player2.isDead() )
	{
		console.log(	player2.nom			, 
						":"					, 
						player2.getPv()		, 
						"PV |"				, 
						player1.nom			, 
						":"					, 
						player1.getPv()		, 
						'PV -'				, 
						player1.getMana()	,
						"PM"
					);
					
		player1.attack(player2);
		
		if(player2.isDead())
		{
			break;
		}

		player2.attack(player1);
		
		console.log("-------------------------------------------------------");
	}
	console.log("Mort de", player2.isDead() ? player2.nom : player1.nom);
	console.log("*********************************************************");
};
// -------------------------------------------------------------------------------------------------------------------------- //


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
// 
function main(){
	instanceHeritage();
	
	var inputBox = document.getElementById("inputBox");
	inputBox.addEventListener("dragover", hoverHandler);
	inputBox.addEventListener("drop", dropHandler);
}

window.addEventListener("load", main);






