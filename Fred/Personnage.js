function Personnage()
{
	this.name = param_name;
}

Personnage.prototype.nom = "perso";
Personnage.prototype._pv = 100;
Personnage.prototype.metier = "metier";
Personnage.prototype._inventaire = null;
Personnage.prototype._defMagic = 0;
Personnage.prototype._defPhy = 0;

Personnage.prototype.attack = function(param_enemy)
{
	param_ennemy.getDammages(degats)
}

Personnage.prototype.getDammages = function(param_degats)
{
	this._pv -= param_degats;
	
	if( this._pv < 0 )
	{
		this._pv = 0;
	}
}

Personnage.prototype.getPv = function(param_pv)
{
	this._pv = param_pv;
}

Personnage.prototype.setPv = function(param_pv)
{
	return this._pv;
}

Personnage.prototype.getDefMagic = function(param_defMagic)
{
	this._defMagic = param_defMagic;
}

Personnage.prototype.setDefMagic = function(param_defMagic)
{
	return this._defMagic;
}
Personnage.prototype.getDefPhy = function(param_defPhy)
{
	this._defPhy = param_defPhy;
}

Personnage.prototype.setDefPhy = function(param_defPhy)
{
	return this._defPhy;
	
Personnage.prototype.getInventaire = function(param_inventaire)
{
	this._inventaire = param_inventaire;
}

Personnage.prototype.setInventaire = function(param_inventaire)
{
	return this._inventaire;
}
}

Personnage.prototype.isDead		= function()
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

