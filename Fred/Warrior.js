//WARRIOR  ==> hérite de personnage

function Warrior(param_name)
{
	Personnage.apply(this,[param_name]);
}

Warrior.prototype._weaponLeft	= null;
Warrior.prototype._weaponRight	= null;

Warrior.prototype.attack = function(param_ennemy)
{
	var booster = 0;
	var degats = 0;
	
	if( this._weaponRight != null )
	{
		console.log(this.nom +" attaque "+param_ennemy.nom+" avec : "+this._weaponRight.nom);
		booster = Math.round( Math.random() * 10 );
		degats = this._weaponRight.power + booster;
		
		param_ennemy.getDammages(degats);
	}
	
	if( this._weaponLeft != null )
	{
		console.log(this.nom +" attaque "+param_ennemy.nom+" avec : "+this._weaponLeft.nom);
		booster = Math.round( Math.random() * 10 );
		degats = this._weaponLeft.power + booster;
		
		param_ennemy.getDammages(degats);
	}
	
	if( this._weaponLeft == null && this._weaponRight == null )
	{
		console.log(this.nom +" attaque "+param_ennemy.nom+" avec : ses poings");
		degats = this._degats;
		param_ennemy.getDammages(degats);
	}
	console.log("méthode surchargée");
};

Warrior.prototype.setWeaponLeft	= function(param_weapon)
{
	this._weaponLeft = param_weapon;
};

Warrior.prototype.setWeaponRight	= function(param_weapon)
{
	this._weaponRight = param_weapon;
};

Warrior.prototype.getWeaponLeft	= function()
{
	return this._weaponLeft;
};

Warrior.prototype.getWeaponRight	= function()
{
	return this._weaponRight;
};

