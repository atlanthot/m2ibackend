// MagicWand

function MagicWand(param_nom, param_type,param_price,param_weight)
{
	Personnage.apply(this,[param_nom, param_type,param_price,param_weight]);
}

MagicWand.prototype.nom 		= null;
MagicWand.prototype.consoMana 	= 0;
MagicWand.prototype.power 		= 0;