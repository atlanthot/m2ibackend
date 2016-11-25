/*hérite d'item*/
function ManaPotion(nom,type,price,weight,restoration)
{
	Item.apply(this,[nom,type,price,weight]);
	this.restoration = restoration;
}