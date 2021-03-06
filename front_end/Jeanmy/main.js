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


function main()
{	
	faireHeriter(Personnage, Wizard);
	faireHeriter(Personnage, Warrior);
	faireHeriter(Personnage, Ennemy);
	faireHeriter(Item, LifePotion);
	faireHeriter(Item, ManaPotion);
	faireHeriter(Item, MagicWand);
	faireHeriter(Item, Weapon);
	faireHeriter(PNJ, Marchand);	
}

window.addEventListener("load", main);