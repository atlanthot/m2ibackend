function Weapon(name,type,price,weight,damages){
	Item.apply(this,[name,type,price,weight]);
	this.damages = damages;
}

Weapon.prototype.damages = 0;
