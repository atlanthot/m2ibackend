/* -------------------------

		Character 

---------------------------- */

function Character(name,pv,mana, defPhy, defMagic){
		this.name = name;
		this._pv = pv;
		this._mana = mana;
		this._physicalDefense = defPhy;
		this._magicalDefense = defMagic;

}

Character.prototype.name = null;
Character.prototype._pv = 0;
Character.prototype._mana = 0;
Character.prototype._physicalDefense = 0;
Character.prototype._magicalDefense = 0;


// FAIRE PARLER LE PERSONNAGE
Character.prototype.talk = function(message){
		console.log(this.message);
}

// SE PRENDRE DES DEGATS
Character.prototype.getDamages = function(damages){
	this._pv -= damages;
	if(this._pv <= 0){
			this._pv = 0;
	}
}


