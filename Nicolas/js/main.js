// Heritage 

const JSON_URL = "data/data.json";

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

/*
	retourne la description d'un personnage ( contenu dans param_data ) en fonction de son type.
*/
function getCharacterInfoByType( param_type, param_data )
{
	var i 		= 0;
	var max 	= param_data.length;
	var current = null;
	
	for( i = 0; i < max; i++ )
	{
		current = param_data[i];
		
		if( current.type == param_type )
		{
			return current;
		}
	}
	
	return null;
}

/*
	retourne un élément au hasard au sein d'un tableau OU null. 
	Il faut constamment maîtriser les valeurs de retour lorsque l'on code 
	des fonctions utilitaires telles que celle-ci.
*/
function getRandomElementFrom( param_tab )
{
	if( param_tab.length < 1 )
		return null;
	
	var max = ( param_tab.length - 1 ) * 10;
	var rand = Math.round( Math.random() * max / 10 ); // <- tire un nombre au hasard
	return param_tab[rand];
}

function donnees_chargees(param_data)
{
	var warriorInfo = getCharacterInfoByType("_warrior_", param_data.characters);
	var wizardInfo 	= getCharacterInfoByType("_wizard_", param_data.characters);
	var arme1Info 	= getRandomElementFrom( param_data.weapons 	);
	var arme2Info 	= getRandomElementFrom( param_data.weapons 	);
	var stickInfo 	= getRandomElementFrom( param_data.sticks 	);
	
	// on vérifie que l'on obtient bien les informations relatives aux deux personnages.
	// si l'un des deux personnages n'est pas retrouvé, on arrête prématurément la fonction
	// car le combat est impossible sans l'un ou l'autre des protagonistes.
	
	if( warriorInfo == null || wizardInfo == null )
		return;
	
	var robocop = new Warrior(warriorInfo);
	var gandalf = new Wizard(wizardInfo);
	var arme1 	= new Weapon(arme1Info);
	var arme2 	= new Weapon(arme2Info);
	var stick 	= new MagicWand(stickInfo);
	
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
	var ma_requete = $.ajax(JSON_URL, "GET");
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