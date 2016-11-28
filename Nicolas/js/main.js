// Heritage 
function faireHeriter(parentClass, childClass)
{
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

function donnees_chargees(param_data)
{
	
	var robocop = new Warrior(
								{
									"nom"		: "Robocop"	,
									"metier"	: "flic"	,
									"pv"		: 100		,
									"defMagic"	: 100		,
									"defPhy"	: 100		,
									"degats"	: 5
								}
							);
							
	var gandalf = new Wizard(
								{
									"nom"		: "Gandalf"	,
									"metier"	: "flic"	,
									"pv"		: 100		,
									"defMagic"	: 100		,
									"defPhy"	: 100		,
									"degats"	: 5			,
									"mana"		: 100
								}
				);
				
	var arme1 = new Weapon(param_data.weapons[0]);
	var arme2 = new Weapon(param_data.weapons[1]);
	var stick = new MagicWand(param_data.sticks[0]);
	
	robocop.setWeaponRight(arme1);
	robocop.setWeaponLeft(arme2);
	
	gandalf.setWandstick(stick);
	
	combat(gandalf, robocop);
}

function erreur_requete()
{
	alert("erreur !");
}

function start(param_event)
{
	var ma_requete = $.ajax("data/weapons.json", "GET");
	ma_requete.done(donnees_chargees);
	ma_requete.fail(erreur_requete);
	
	faireHeriter(Personnage, Warrior);
	faireHeriter(Personnage, Wizard);
	faireHeriter(Item, MagicWand);
	faireHeriter(Item, Weapon);
}

function combat(player1, player2)
{
	while( !player1.isDead() && !player2.isDead() )
	{
		player1.attack(player2);
		
		if(player2.isDead())
		{
			break;
		}
		
		player2.attack(player1);
	}
	
	console.log("Mort de", player2.isDead() ? player2.nom : player1.nom);
};


window.addEventListener("load", start);