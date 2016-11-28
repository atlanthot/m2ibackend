function Wizard(data)
{
	Personnage.apply(this, [data]);
	this._mana = data.mana;
}

Wizard.prototype._mana = null;
Wizard.prototype._wandstick = null;

//accesseurs wandstick
Wizard.prototype.setWandstick = function(wandstick)
{
	this._wandstick = wandstick;
}

Wizard.prototype.getWandstick = function()
{
	return this._wandstick;
}

Personnage.prototype.getMana = function()
{
	return this._mana;
}

Wizard.prototype.attack	= function(param_ennemy)
{
	if( this._wandstick != null)
	{	
		param_ennemy.getDamages(this._wandstick.power);
		console.log(this.nom, "attaque", param_ennemy.nom, "avec", this._wandstick.nom, "(", this._wandstick.power, "dmg )" );
		
		if (this._mana >= this._wandstick.consoMana)
		{
			var booster = Math.ceil( (Math.random() * Math.floor(this._wandstick.power))/ 1.5 );
			param_ennemy.getDamages(booster);
			console.log("Attaque Magique ! (+", booster, "dmg )")
			this._mana -= this._wandstick.consoMana;
		}

	}
	else
	{
		console.log(this.nom, "attaque", param_ennemy.nom, "avec ses poings ");
		param_ennemy.getDamages(this._degats);
	}
};


