// ITEM

function Item( param_nom, param_type,param_price,param_weight)
{
	this.nom = param_nom;
	this.type = param_type;
	this.price = param_price;
	this.weight = param_weight;
}

Item.prototype.nom 		= null;
Item.prototype.type 	= null;
Item.prototype.price 	= 0;
Item.prototype.weight 	= 0;