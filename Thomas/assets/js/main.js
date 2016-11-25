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

function start(){
	var monObjetAjax = new XMLHttpRequest();
	monObjetAjax.addEventListener("readystatechange", readyStateHandler);
	monObjetAjax.open("GET","assets/data.json", true);
	monObjetAjax.send(null);
}

function run(obj){
	var container = document.getElementById("container");
	
	var champs = obj["dtdArmeWarrior"];
	var armeWarrior = obj["armeWarrior"];
	var html = '';
	
	html += '<h1>'+obj["titre"]+'</h1>';
	html += '<h2>'+champs+'</h2>';
	html += '<table>';
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
	
	html += '<h2>'+champs+'</h2>';
	html += '<table>';
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

function main(){	
	faireHeriter(Personnage, Wizard);
	faireHeriter(Personnage, Warrior);
	faireHeriter(Personnage, Ennemy);
	faireHeriter(Item, LifePotion);
	faireHeriter(Item, ManaPotion);
	faireHeriter(Item, MagicWand);
	faireHeriter(Item, Weapon);
	faireHeriter(Item, Baton);
	faireHeriter(PNJ, Marchand);
	start();
}

function combat(obj){
	
	var mere_theresa = new Wizard("Mère Theresa","Barde",50);
	var robocop = new Warrior("Robocop","Justicier");
	
	var token1 = Math.floor(Math.random() * ( obj.armeWarrior.length - 1) );
	var token2 = Math.floor(Math.random() * ( obj.armeWarrior.length - 1) );
	var token3 = Math.floor(Math.random() * ( obj.armeWizard.length - 1 ) );
	
	var arme1 = obj.armeWarrior[token1];
	var arme2 = obj.armeWarrior[token2];
	var arme3 = obj.armeWizard[token3];
	
	robocop.setWeaponRight( new Weapon(arme1) );
	robocop.setWeaponLeft( new Weapon(arme2) );
	mere_theresa.setWandstick( new Baton(arme3) );
	
	console.log(robocop,'\n',mere_theresa);
	console.log("*********************************************************");
	while( !mere_theresa.isDead() && !robocop.isDead() ){
		console.log(robocop.nom + " : "+ robocop.getPv() + " | " + mere_theresa.nom + " : "+ mere_theresa.getPv()+' - '+ mere_theresa.getMana());
		mere_theresa.attack(robocop);
		if( robocop.isDead() ){
			break;
		}

		robocop.attack(mere_theresa);
		
		console.log("-------------------------------------------------------");
	}
	console.log(robocop.isDead() ? "Mort de robocop" : "Mort de Mamie");
};



window.addEventListener("load", main);
