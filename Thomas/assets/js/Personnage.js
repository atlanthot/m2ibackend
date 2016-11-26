function Personnage(nom, metier){
	this.nom = nom;
	this.metier = metier;
}

Personnage.prototype.metier = null;
Personnage.prototype.nom = null;
Personnage.prototype._pv = 100;
Personnage.prototype._defMagic = null;
Personnage.prototype._defPhy = null;

//Accesseurs
Personnage.prototype.setPv = function(value){
	this._pv = value;
}

Personnage.prototype.getPv = function(){
	return this._pv;
}

Personnage.prototype.setDefMagic = function(value){
	this._defMagic = value;
}

Personnage.prototype.getDefMagic = function(){
	return this._defMagic;
}

Personnage.prototype.setDefPhy = function(value){
	this._defPhy = value;
}

Personnage.prototype.getDefPhy = function(){
	return this._defPhy;
}

//méthodes de Personnage

Personnage.prototype.parler = function(){
	alert("Je parle");
};

Personnage.prototype.getDamages = function(x){
	this._pv -= x;
};

Personnage.prototype.isDead = function(){
	return this._pv <= 0 ? true : false;
}