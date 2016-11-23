
function Warrior(param_name)
{
	this.nom = param_name;
	console.log("nouveau guerrier: "+ this.nom);
}

Warrior.prototype.nom 			= "Conan";
Warrior.prototype._pv 			= 100;
Warrior.prototype._degats 		= 10;

Warrior.prototype.attack		= function(param_ennemy)
{
	var booster = Math.round( Math.random() * 10 );
	var degats = this._degats + booster;
	
	param_ennemy.getDammages(degats);
};

Warrior.prototype.getDammages 	= function(param_degats)
{
	this._pv -= param_degats;
	
	if( this._pv < 0 )
	{
		this._pv = 0;
	}
};

Warrior.prototype.getPV			= function()
{
	return this._pv;
};

Warrior.prototype.isDead		= function()
{
	if( this._pv <= 0 )
	{
		return true;
	}
	else
	{
		return false;
	}
};



function MagicWand(){}

MagicWand.prototype.consoMana 	= 40;
MagicWand.prototype.degats 		= 20;



function HarryPotterStick(){}

HarryPotterStick.prototype.consoMana 	= 100;
HarryPotterStick.prototype.degats 		= 35;



function Wizzard(param_nom)
{
	this.nom = param_nom;
}

Wizzard.prototype.nom 			= "Merlin";
Wizzard.prototype.mana 			= 100;
Wizzard.prototype._pv 			= 100;
Wizzard.prototype._degats 		= 3;
Wizzard.prototype._wandstick 	= null; 

Wizzard.prototype.setMagicWand	= function(param_magicwand)
{
	this._wandstick = param_magicwand;
};

Wizzard.prototype.getMagicWand	= function()
{
	return this._wandstick;
};

Wizzard.prototype.attack		= function(param_ennemy)
{
	var booster = Math.round( Math.random() * 10 );
	
	if( this._wandstick == null )
	{
		param_ennemy.getDammages(this._degats + booster);
	}
	else if( this.mana <= this._wandstick.consoMana )
	{
		param_ennemy.getDammages(this._degats + booster);
	}
	else
	{
		param_ennemy.getDammages(this._wandstick.degats + booster);
	}
};

Wizzard.prototype.getDammages 	= function(param_degats)
{
	this._pv -= param_degats;
	
	if( this._pv < 0 )
	{
		this._pv = 0;
	}
};

Wizzard.prototype.getPV			= function()
{
	return this._pv;
};

Wizzard.prototype.isDead		= function()
{
	if( this._pv <= 0 )
	{
		return true;
	}
	else
	{
		return false;
	}
};





var mere_theresa = new Wizzard("Mère Theresa");
var robocop = new Warrior("Robocop");

mere_theresa.setMagicWand( new HarryPotterStick() );


while( !mere_theresa.isDead() && !robocop.isDead() )
{
	console.log("*********************************************************");
	
	mere_theresa.attack(robocop);
	
	console.log("Point de vies de "+robocop.nom+": "+robocop.getPV());
	
	if( robocop.isDead() )
	{
		break;
	}
	
	robocop.attack(mere_theresa);
	
	console.log("Point de vies de "+mere_theresa.nom+": "+mere_theresa.getPV());
	
	console.log("*********************************************************");
}



