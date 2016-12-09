/*hérite d'item*/
function MagicWand(nom,type,price,weight,manaConso)
{
	Item.apply(this,[nom,type,price,weight]);
	this.manaConso = manaConso;
}