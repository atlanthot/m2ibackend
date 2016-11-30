

function faireHeriter(parentClass,childClass)
{
	var obj = new Object();
	var prop = null;
	
	for( prop in parentClass.prototype )
	{
		obj[prop] = parentClass.prototype[prop];
	}
	

	for( prop in childClass.prototype )
	{
		obj[prop] = childClass.prototype[prop];
	}
	
	childClass.prototype = obj;
}

function failHandler( jqXHR, textStatus ) 
{
  	alert("Request failed: " + textStatus );
}

function successHandler( param_data ) 
{
	var jsonDatas = param_data;
	var datas = jsonDatas.data;
	var champs = jsonDatas.champs;
	var nbAleat = Math.round(Math.random() * (datas.length -1)); // Arme aleatoire dans le Json
	
	// Défini une nouvelle arme de type Weapon
	var weapon = new Weapon(
								datas[nbAleat].name, 
								datas[nbAleat].type, 
								"150", 
								"30", 
								datas[nbAleat].damages
							);
	
	var warrior 	= new Warrior("Conan", "140", "0","30","15"); // Création d'un guerrier
	var wizard 		= new Wizard("Elminster", "100", "100", "15", "30"); // Création d'un magicien
	var inventory 	= new Inventory();
	
	console.log(weapon.name);
}


function start()
{
	$("#fight").html('<button id="fightBt" value="FIGHT!">Fight</button>');


	var request = 	$.ajax(
						{
							url: "weapons.json",
							type: "GET"
						}
					);

	request.done(successHandler);
	request.fail(failHandler);


	faireHeriter(Character, Warrior);
	faireHeriter(Character, Wizard);
}

window.addEventListener("load", start);

	
	
	
	