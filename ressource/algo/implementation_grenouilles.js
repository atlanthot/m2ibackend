function Grenouille(){}

function Marecage()
{
	this.grenouilles = new Array();
}

Marecage.prototype.grenouilles = null;



var grenouillere = [	
					new Grenouille(), 
					new Grenouille(),
					new Grenouille(),
					new Grenouille(),
					new Grenouille(),
					new Grenouille()
				];
				
var marecages = [
			new Marecage(),
			new Marecage(),
			new Marecage(),
			new Marecage(),
			new Marecage(),
			new Marecage(),
			new Marecage(),
			new Marecage(),
			new Marecage(),
			new Marecage()
];

var max = grenouillere.length;
var i 	= 0;
var j	= 0;
var o	= 0;
var z 	= 0;
var currentGrenouille = null;


while( grenouillere.length > 0 )
{
	o = 0;
	z = grenouillere.length;
	j = marecages.length;
	
	while( --j > -1 )
	{
		if( marecages[j].grenouilles.length <= z )
		{
			z = marecages[j].grenouilles.length;
			o = j;
		}
	}
	
	
	currentGrenouille = grenouillere.shift();
	marecages[o].grenouilles.push(currentGrenouille);
}

console.log(marecages);

