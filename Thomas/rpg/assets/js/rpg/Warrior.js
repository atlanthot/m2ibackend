function Warrior(data)
{
	Personnage.apply(this, [data]);
}

Warrior.prototype._weaponRight = null;
Warrior.prototype._weaponLeft = null;
Warrior.prototype._degats = null;

//accesseurs weaponRight
Warrior.prototype.setWeaponRight = function(weapon)
{
	this._weaponRight = weapon;
}

Warrior.prototype.getWeaponRight = function()
{
	return this._weaponRight;
}

//accesseurs weaponLeft
Warrior.prototype.setWeaponLeft = function(weapon)
{
	this._weaponLeft = weapon;
}

Warrior.prototype.getWeaponLeft = function()
{
	return this._weaponLeft;
}

Warrior.prototype.attack = function(param_ennemy)
{	
	var degatsFinal = this._degats;
	consoleDial = "";
	
	if(this._weaponLeft != null)
	{
		consoleDial = this.nom + " attaque " + param_ennemy.nom + " avec " + this._weaponLeft.nom;
		degatsFinal += this._weaponLeft.power;		
	}
	
	if(this._weaponRight != null)
	{
		consoleDial += " & " + this._weaponRight.nom;
		degatsFinal += this._weaponRight.power;
	}
	
	if(this._weaponRight != null && this._weaponLeft != null)
	{
		/*
			si les deux mains sont équipés d'armes
			bonus de 10% a 20% ( de la somme des 2 armes)
		*/
		var min = (this._weaponRight.power + this._weaponLeft.power) * 0.10;
		var max = (this._weaponRight.power + this._weaponLeft.power) * 0.20;
		
		var booster = Math.floor( min + ( Math.random() * max ) );
		
		degatsFinal += booster;
	}
	
	else
	{
		consoleDial = this.nom + " attaque à mains nues ";
	}
	
	console.log(consoleDial);
	
	// permet de ne retirer que les pv restant à l'adversaire si c'est pv sont inferieur au degat reçu
	var ennemyPv = param_ennemy.getPv();
	
	if(degatsFinal > ennemyPv)
	{
		degatsFinal = ennemyPv;
	}
	
	param_ennemy.getDamages(degatsFinal);
	

	console.log(param_ennemy.nom, " - ", degatsFinal, "PDV");
};