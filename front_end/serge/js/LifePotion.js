/*hérite d'item*/
function LifePotion(nom,type,price,weight,restoration)
{
	Item.apply(this,[nom,type,price,weight]);
	this.restoration = restoration;
}