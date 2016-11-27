/*hérite d'item*/
function Weapon(data){
	Item.apply(this, [data.nom, data.type, data.price, data.weight]);
	this.power = data.power;
}
	
	