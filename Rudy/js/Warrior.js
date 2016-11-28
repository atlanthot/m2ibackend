/* -------------------------

		GUERRIER 

---------------------------- */

function Warrior(name,pv,mana,physicalDefense, magicalDefense){
		Character.apply(this,[name,pv,mana,physicalDefense, magicalDefense]);
}

Warrior.prototype._weaponLeft = null;
Warrior.prototype._weaponRight = null;


Warrior.prototype.setWeapon = function(weapon, hand){
	if(hand == "left"){
		this._weaponLeft = weapon;
	}
	if(hand == "right"){
		this._weaponRight = weapon;
	}
}