
function Personnage(nom,metier)
{
	this.nom = nom;
	this.metier = metier;
}

Personnage.prototype.metier = null;
Personnage.prototype.nom = null;
Personnage.prototype._pv = null;
Personnage.prototype._defMagic = null;
Personnage.prototype._defPhy = null;

//accesseurs pv
Personnage.prototype.setPv = function(value)
{
	this._pv = value;
}

Personnage.prototype.getPv = function()
{
	return this._pv;
}

//accesseurs defMagic
Personnage.prototype.setDefMagic = function(value)
{
	this._defMagic = value;
}

Personnage.prototype.getDefMagic = function()
{
	return this._defMagic;
}

//accesseurs defPhy
Personnage.prototype.setDefPhy = function(value)
{
	this._defPhy = value;
}

Personnage.prototype.getDefPhy = function()
{
	return this._defPhy;
}

//méthodes de Personnage

Personnage.prototype.parler = function()
{
	alert("Je parle");
};

Personnage.prototype.getDamages = function(phy,mag)
{
	return (phy + mag) * (1 + Math.random);
};

/*Personnage.prototype.sell = function()
{
	alert(this._noise);
};*/