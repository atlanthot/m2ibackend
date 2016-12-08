// Heritage 

const JSON_URL = "data/data.json";
const moveSpeed = 1;
const timeSpeed = 5;

const CASE_WIDTH = 48;
const CASE_HEIGHT = 48;

var control = null;
var farm 	= null;
var perso 	= null;

function faireHeriter(parentClass, childClass)
{
	var obj = new Object();
	var prop = null;
	
	for( prop in parentClass.prototype ){
		obj[prop] = parentClass.prototype[prop];
	}
	
	for( prop in childClass.prototype ){
		obj[prop] = childClass.prototype[prop];
	}
	
	childClass.prototype = obj;
}

function mouseDown(event)
{
	event.preventDefault();
	
	switch(event.target.id)
		{
			case "img_gauche":
				control.moveLeft();
				break;
			case "img_haut":
				control.moveTop();
				break;
			case "img_droite":
				control.moveRight();
				break;
			case "img_bas":
				control.moveBottom();
				break;
		}
}

function mouseOutHandler(event)
{
	switch(event.target.id)
	{
		case "img_gauche":
			control.stop();
			break;		
		case "img_haut":
			control.stop();
			break;		
		case "img_droite":
			control.stop();
			break;		
		case "img_bas":
			control.stop();
			break;
	}
}

function mouseUp(event)
{
	control.stop();
}

function gameFail()
{
	alert("game fail !");
}

function gameReady()
{
	
	perso = new Personnage(
	
		{
			"animations" 	: {
				"walk_bottom":["bottom_0","bottom_1","bottom_2"]
			},	 
			"states"		: {
				
				"bottom_0"	: {"x": 0	, "y": 0	, "width": 32, "height": 32},
				"bottom_1"	: {"x": 32	, "y": 0	, "width": 32, "height": 32},
				"bottom_2"	: {"x": 64	, "y": 0	, "width": 32, "height": 32},
				"left_0"	: {"x": 0	, "y": 32	, "width": 32, "height": 32},
				"left_1"	: {"x": 32	, "y": 32	, "width": 32, "height": 32},
				"left_2"	: {"x": 64	, "y": 32	, "width": 32, "height": 32},
				"right_0"	: {"x": 0	, "y": 64	, "width": 32, "height": 32},
				"right_1"	: {"x": 32	, "y": 64	, "width": 32, "height": 32},
				"right_2"	: {"x": 64	, "y": 64	, "width": 32, "height": 32},
				"up_0"		: {"x": 0	, "y": 96	, "width": 32, "height": 32},
				"up_1"		: {"x": 32	, "y": 96	, "width": 32, "height": 32},
				"up_2"		: {"x": 64	, "y": 96	, "width": 32, "height": 32}
			},
			"state"		: "left_1"				,
			"img"		: "images/persos.png"	,
			"type"		: "_warrior_"			,
			"nom"		: "Robocop"				,
			"metier"	: "flic"				,
			"pv"		: 100					,
			"defMagic"	: 100					,
			"defPhy"	: 100					,
			"degats"	: 5	
		}
	
	);
	
	perso.width = CASE_WIDTH;
	perso.height = CASE_HEIGHT;
	
	farm.addPersonnage( perso );
	control = new Controller (moveSpeed, timeSpeed,0, farm, perso);
	
	perso.x = 1 * CASE_WIDTH;
	perso.y = 1 * CASE_HEIGHT;
	perso.draw();
	
	window.addEventListener("mousedown",mouseDown);
	window.addEventListener("mouseup",mouseUp);
	window.addEventListener("mouseout",mouseOutHandler);
}

function start(param_event)
{	
	
	faireHeriter(Personnage, Warrior);
	faireHeriter(Personnage, Wizard);
	faireHeriter(Item, MagicWand);
	faireHeriter(Item, Weapon);
	
	farm 	= new Map(20,15,"maps/farm.json");
	
	farm.generate(gameReady, gameFail);
}

window.addEventListener("load", start);

