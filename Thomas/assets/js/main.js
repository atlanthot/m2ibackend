// Heritage 
function faireHeriter(parentClass, childClass){
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

// affichage
function makeTable(objJSON){
	var obj = objJSON.data;
	var html = '';
	
	for(x = 0; x < obj.length; x++){	
		var dtd = obj[x].dtd;
		var listValue = obj[x].valueList;
		
		html += '<table>';
		html += '<caption>'+ obj[x].title + '</caption>';
		html += '<tr>';
		
		for(var i = 0; i < dtd.length; i++){
			html += "<th>" + dtd[i] + "</th>";
		}
		
		for(i = 0; i < listValue.length; i++){
			
			html += '</tr><tr>';
			
			for( prop in listValue[i] ){
				html += '<td>' + listValue[i][prop] + '</td>';
			}			
			
			html += '</tr>';
		} 
		
		html += '</table>';
	}
	$("#container").html(html);
	combat(obj);
}

// debug utility 
function combat(obj){
	var classArray = obj[0].valueList;
	var warriorWeapon = obj[1].valueList;
	var wizardWeapon = obj[2].valueList;

	var player1 = new Wizard(classArray[1]);
	var player2 = new Warrior(classArray[0]);
	
	var token1 = Math.floor(Math.random() * ( warriorWeapon.length - 1) );
	var token2 = Math.floor(Math.random() * ( warriorWeapon.length - 1) );
	var token3 = Math.floor(Math.random() * ( wizardWeapon.length - 1 ) );
	
	var arme1 = warriorWeapon[token1];
	var arme2 = warriorWeapon[token2];
	var arme3 = wizardWeapon[token3]; 
	
	player2.setWeaponRight( new Weapon(arme1) );
	player2.setWeaponLeft( new Weapon(arme2) );
	player1.setWandstick( new MagicWand(arme3) );

	console.log("*********************************************************");
	while( !player1.isDead() && !player2.isDead() ){
		console.log(player2.nom, ":",
					player2.getPv(), "PV |",
					player1.nom, ":",
					player1.getPv(), 'PV -',
					player1.getMana(), "PM"
					);
		player1.attack(player2);
		if(player2.isDead()){
			break;
		}
		player2.attack(player1);
		console.log("-------------------------------------------------------");
	}
	console.log("Mort de", player2.isDead() ? player2.nom : player1.nom);
};

function succesHandler(jsonAjax){
	makeTable(jsonAjax);
}
function failHandler(){
	console.log('erreur');
}
function main(){
	instanceHeritage();
	console.log('Initialisation');
	
	var request = $.ajax({
		url: "assets/data.json",
		type: "GET"
	})
	request.done(succesHandler);
	request.fail(failHandler);
}

$(document).ready(main());