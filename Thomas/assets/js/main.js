function instanceHeritage()
{
	faireHeriter(Personnage, Wizard);
	faireHeriter(Personnage, Warrior);
	faireHeriter(Personnage, Ennemy);
	faireHeriter(Item, LifePotion);
	faireHeriter(Item, ManaPotion);
	faireHeriter(Item, Weapon);
	faireHeriter(Item, MagicWand);
	faireHeriter(PNJ, Marchand);
}
function faireHeriter(parentClass, childClass)
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

function instanceCombat(param_data){
	var classArray = param_data.characterClass;
	var weapons = param_data.weapons;
	var sticks = param_data.sticks;

	var player1 = new Warrior(classArray[0]);
	var player2 = new Wizard(classArray[1]);
	
	var token1 = Math.floor(Math.random() * ( weapons.length ) );
	var token2 = Math.floor(Math.random() * ( weapons.length ) );
	var token3 = Math.floor(Math.random() * ( sticks.length ) );
	
	var arme1 = weapons[token1];
	var arme2 = weapons[token2];
	var arme3 = sticks[token3]; 
	
	player1.setWeaponRight( new Weapon(arme1) );
	player1.setWeaponLeft( new Weapon(arme2) );
	player2.setWandstick( new MagicWand(arme3) );
	combat(player1, player2);
}

function combat(player1, player2)
{
	console.log("*********************************************************");
	while(!player1.isDead() && !player2.isDead())
	{
		console.log(player1.nom, ":",
					player1.getPv(), "PV |",
					player2.nom, ":",
					player2.getPv(), 'PV -',
					player2.getMana(), "PM"
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
};

function succesHandler(objAjax)
{
	instanceCombat(objAjax);
}
function failHandler()
{
	console.log("Erreur Ajax !");
}

function main()
{
	instanceHeritage();
	
	var request = $.ajax({ url: "assets/data/data.json", type: "GET" })
	request.done(succesHandler);
	request.fail(failHandler);
}

window.addEventListener("load", main);