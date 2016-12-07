/* classe controller */
function Controller(param_movelaps,param_timelaps, param_timeOutId)
{
	this.moveLaps = param_movelaps;
	this.timeLaps = param_timelaps;
	this.timeOutId = param_timeOutId;
}

Controller.prototype.timeLaps = 0;
Controller.prototype.moveLaps = 0;
Controller.prototype.timeOutId = 0;




/* Méthode de Controller */

Controller.prototype.stop = function()
{
	window.clearTimeout(this.timeOutId);
};

Controller.prototype.moveRight = function ()
{	

	var map = document.getElementById("map");
	var perso = document.getElementById("perso");
	var abs_perso = parseInt(getComputedStyle(perso).left);
	var coord_perso = parseInt(getComputedStyle(perso).top);
	if(	abs_perso <= parseInt(getComputedStyle(map).width) - parseInt(getComputedStyle(perso).width)- this.moveLaps && 
		isWalkable(abs_perso + this.moveLaps,coord_perso, 48, 48)
	) 
	{
		perso.style.left = (abs_perso + this.moveLaps) + "px";

		this.stop();
		this.timeOutId = setTimeout(this.moveRight.bind(this), this.timeLaps);
	}

}

Controller.prototype.moveLeft = function ()
{
	var map = document.getElementById("map");
	var perso = document.getElementById("perso");
	var abs_perso = parseInt(getComputedStyle(perso).left);
	var coord_perso = parseInt(getComputedStyle(perso).top);
	if(abs_perso >= this.moveLaps && isWalkable(abs_perso - this.moveLaps,coord_perso, 48, 48)) 
	{	
		perso.style.left = (abs_perso - this.moveLaps) + "px";
		this.stop();
		this.timeOutId = setTimeout(this.moveLeft.bind(this), this.timeLaps);
	}	

}

Controller.prototype.moveTop = function ()
{
	var map = document.getElementById("map");
	var perso = document.getElementById("perso");
	var abs_perso = parseInt(getComputedStyle(perso).left);
	var coord_perso = parseInt(getComputedStyle(perso).top);
	if(coord_perso >= this.moveLaps && isWalkable(abs_perso,coord_perso - this.moveLaps, 48, 48))
	{
		perso.style.top = (coord_perso - this.moveLaps) + "px";
		this.stop();
		this.timeOutId = setTimeout(this.moveTop.bind(this), this.timeLaps );
	}
}


Controller.prototype.moveBottom = function ()
{

	var map = document.getElementById("map");
	var perso = document.getElementById("perso");
	var abs_perso = parseInt(getComputedStyle(perso).left);
	var coord_perso = parseInt(getComputedStyle(perso).top);
	if(coord_perso <= parseInt(getComputedStyle(map).height) - parseInt(getComputedStyle(perso).height) - this.moveLaps && isWalkable(abs_perso + this.moveLaps,coord_perso, 48, 48) ) 
	{
		perso.style.top = (coord_perso + this.moveLaps) + "px";
		this.stop();
		this.timeOutId = setTimeout(this.moveBottom.bind(this), this.timeLaps);

	}
}

function getCollideCases(x_perso, y_perso, width_perso, height_perso, width_case, height_case)
{
	var case1 = new Object();
	var case2 = new Object();
	var case3 = new Object();
	var case4 = new Object();
	var tab = new Array();


	case1.row = parseInt(y_perso / height_case);
	case1.col = parseInt(x_perso / width_case);
	case1.walkable = !( case1.row == 1 && case1.col == 0 );

	case2.row = parseInt(y_perso / height_case);
	case2.col = parseInt( (x_perso + width_perso) / width_case);
	case2.walkable = !( case2.row == 1 && case2.col == 0 );

	case3.row = parseInt( ( y_perso + height_perso) / height_case);
	case3.col = parseInt(x_perso / width_case);
	case3.walkable = !( case3.row == 1 && case3.col == 0 );

	case4.row = parseInt( ( y_perso + height_perso ) / height_case);
	case4.col = parseInt( ( x_perso + width_perso ) / width_case);
	case4.walkable = !( case4.row == 1 && case4.col == 0 );
	

	tab.push(case1, case2, case3, case4);
	return tab;
}


function isWalkable(param_x,param_y, param_width, param_height) 
{
	
	var	tableau = getCollideCases(param_x, param_y, 48, 48, 48, 48);
	var currentCase = null;
	var xcase = 0;
	var ycase = 0;
	var x2case = 0;
	var y2case = 0;

	
	for (i = 0; i < tableau.length ; i++)
	{
		currentCase = tableau[i];
		
		if( currentCase.walkable == true )
			continue;
		
		xcase = currentCase.col * 48;
		x2case = xcase + 48;
		
		ycase = currentCase.row * 48;
		y2case = ycase + 48;
		
		
		if(	 param_x >= x2case 					|| 
			( param_x + param_width ) <= xcase 	|| 
			param_y >= y2case					|| 
			( param_y + param_height ) <= ycase
		)
		{
			continue;
		}
		
		return false;
		
	}
	return true;
}














