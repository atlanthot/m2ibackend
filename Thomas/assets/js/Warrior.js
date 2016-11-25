/*hérite de personnage*/
function Warrior(nom,metier){
	Personnage.apply(this,[nom,metier]);
}

Warrior.prototype._weaponRight = null;
Warrior.prototype._weaponLeft = null;


//accesseurs weaponRight
Warrior.prototype.setWeaponRight = function(weapon){
	this._weaponRight = weapon;
}

Warrior.prototype.getWeaponRight = function(){
	return this._weaponRight;
}

//accesseurs weaponLeft
Warrior.prototype.setWeaponLeft = function(weapon){
	this._weaponLeft = weapon;
}

Warrior.prototype.getWeaponLeft = function(){
	return this._weaponLeft;
}
Warrior.prototype.attack = function(param_ennemy){	
	if( this._weaponLeft != null){
		console.log(this.nom +" attaque "+param_ennemy.nom+" avec: "+this._weaponLeft.nom);
		param_ennemy.getDamages(this._weaponLeft.power);
	}
	else{
		console.log(this.nom +" attaque "+param_ennemy.nom+" avec ses poings ");
		param_ennemy.getDamages(this._weaponLeft);
	}
};