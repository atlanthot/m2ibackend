/*hérite d'item*/
function Weapon(nom,type,price,weight,power)
{
	Item.apply(this,[nom,type,price,weight]);
	this.power = power;
}