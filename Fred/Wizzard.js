// WIZZARD ==> hérite de Personnage

function Wizzard(param_nom)
{
	Personnage.apply(this,[param_name]);
}

Wizzard.prototype.mana 			= 100;
Wizzard.prototype._wandstick 	= null; 

Wizzard.prototype.getDammages = function()
{
	// super appel de la méthode parente
	Personnage.prototype.getDammages.apply(this); 
}

Wizzard.prototype.attack		= function(param_ennemy)
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