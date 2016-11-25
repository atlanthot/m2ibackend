
/*hérite de personnage + ses propriétés*/
function Wizard(nom,metier,mana)
{
	Personnage.apply(this,[nom,metier]);
	this.mana = mana;
}

Wizard.prototype.mana = null;
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

Wizard.prototype.attack		= function(param_ennemy)
{
	var booster = Math.round( Math.random() * 10 );
	
	if( this._wandstick != null && this.mana >= this._wandstick.consoMana)
	{
		console.log(this.nom +" attaque "+param_ennemy.nom+" avec: "+this._wandstick.nom);
		param_ennemy.getDammages(this._degats + booster);
		this.mana -= this._wandstick.consoMana;
	}
	else
	{
		console.log(this.nom +" attaque "+param_ennemy.nom+" avec ses poings ");
		param_ennemy.getDammages(this._wandstick.power + booster);
	}
};


