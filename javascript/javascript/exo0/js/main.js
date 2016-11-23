// ES5
"use strict";

/*
function start()
{
	var element = document.getElementById("test");
	console.log(element);
	
	window.removeEventListener("load", start);
}


window.addEventListener("load", start);
*/

var warrior1 	= new Object();
var warrior2 	= new Object();


warrior1.nom 		= "Mère Theresa";
warrior1._pv 		= 100;
warrior1._degats	= 10;

warrior1.isDead		= function()
{
	if( this._pv <= 0 )
	{
		return true;
	}
	else
	{
		return false;
	}
};

warrior1.getPV		= function()
{
	return this._pv;
};

warrior1.attack		= function(param_ennemy)
{
	var booster = Math.round( Math.random() * 5 );
	var dammages = this._degats + booster;
	
	param_ennemy.getDammages(dammages);
};

warrior1.getDammages = function(param_degats)
{
	this._pv -= param_degats;
	
	if( this._pv < 0 )
	{
		this._pv = 0;
	}
};



warrior2.nom 		= "Jamie Lannister";
warrior2._pv 		= 100;
warrior2._degats	= 10;

warrior2.isDead		= function()
{
	if( this._pv <= 0 )
	{
		return true;
	}
	else
	{
		return false;
	}
};

warrior2.getPV		= function()
{
	return this._pv;
};

warrior2.attack		= function(param_ennemy)
{
	var booster = Math.round( Math.random() * 5 );
	var dammages = this._degats + booster;
	
	param_ennemy.getDammages(dammages);
};

warrior2.getDammages = function(param_degats)
{
	this._pv -= param_degats;
	
	if( this._pv < 0 )
	{
		this._pv = 0;
	}
};



while( !warrior1.isDead() && !warrior2.isDead() )
{
	console.log("*********************************************************");
	
	warrior1.attack(warrior2);
	
	console.log("Point de vies de "+warrior2.nom+": "+warrior2.getPV());
	
	if( warrior2.isDead() )
	{
		break;
	}
	
	warrior2.attack(warrior1);
	
	console.log("Point de vies de "+warrior1.nom+": "+warrior1.getPV());
	
	console.log("*********************************************************");
}






