// ES5
"use strict";

function Voiture(param_marque)
{
	this.marque = param_marque;
}

Voiture.prototype.marque = "Golf";
Voiture.prototype.makeNoise = function()
{
	console.log(this);
};


var mabagnole = new Voiture("alfa");/* 	|	var mabagnole = new Object();
										|
										|	for( var prop in Voiture.prototype )
										|	{
										|		mabagnole[prop] = Voiture.prototype[prop];
										|	}
										|
										|	Voiture.apply(mabagnole);
									*/

mabagnole.makeNoise();

// la méthode bind des objets de type "Function" renvoie une copie de cet objet / fonction
// dont le contexte d'éxécution ( le this ) sera toujours égal à l'objet envoyé en 1er paramètre
// de bind.

// cela nous permet de nous affranchir des contraintes liées aux problèmes de 
// contexte d'éxécution a.k.a problème "de scope".

var toto = mabagnole.makeNoise.bind(mabagnole);

toto();
								



