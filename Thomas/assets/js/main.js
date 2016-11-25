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
	faireHeriter(PNJ, Marchand);
	start();
}

window.addEventListener("load", main);
