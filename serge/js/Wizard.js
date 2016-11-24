
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