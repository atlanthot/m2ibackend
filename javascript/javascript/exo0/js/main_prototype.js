
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


var mere_theresa = new Warrior("Mère Theresa");
var robocop = new Warrior("Robocop");


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



