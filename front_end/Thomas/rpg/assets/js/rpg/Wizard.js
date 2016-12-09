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
	var degatsFinal = this._degats;
	var consoleDial = "";
	
	if(this._wandstick != null)
	{
		degatsFinal += this._wandstick.power;
		
		if (this._mana >= this._wandstick.consoMana)
		{
			consoleDial = "( attaque magique ! )";
			
			/* 
				Si il a assez de mana, le magicien utilise un sort magique ce qui lui
				rajoute des points de dommage compris entre 20% et 70% de la valeur de l'arme équipé
				ex : batonDeLaMortQuiTue : 100 de dommage, une attaque magique permet de taper entre 120 et 170
			*/
			var min = this._wandstick.power * 0.20;
			var max = this._wandstick.power * 0.70;
		
			var booster = Math.floor( min + ( Math.random() * max ) );

			degatsFinal += booster;
			
			this._mana -= this._wandstick.consoMana;
		}
		
		console.log(this.nom, "attaque", param_ennemy.nom, "avec", this._wandstick.nom, consoleDial);
	}
	
	else
	{
		console.log(this.nom, "attaque à mains nues");
	}
	
	// permet de ne retirer que les pv restant à l'adversaire si c'est pv sont inferieur au degat reçu
	var ennemyPv = param_ennemy.getPv();
	
	if(degatsFinal > ennemyPv)
	{
		degatsFinal = ennemyPv;
	}
	
	param_ennemy.getDamages(degatsFinal);
	
	console.log(param_ennemy.nom, " - ", degatsFinal, "pdv");
};


