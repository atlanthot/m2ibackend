function Personnage(obj)
{
	this.currentState = obj.state;
	this.img		= obj.img;
	this.nom 		= obj.nom;
	this.metier 	= obj.metier;
	this._pv 		= obj.pv;
	this._defMagic 	= obj.defMagic;
	this._defPhy 	= obj.defPhy;
	this._degats 	= obj.degats;
	this._elem		= document.createElement("div");
	this._states	= obj.states;
}

Personnage.prototype.currentState = null;
Personnage.prototype.x 			= 0;
Personnage.prototype.y 			= 0;
Personnage.prototype.img 		= null;
Personnage.prototype.metier 	= null;
Personnage.prototype.nom 		= null;
Personnage.prototype._states 	= null;
Personnage.prototype._elem 		= null;
Personnage.prototype._pv 		= 100;
Personnage.prototype._defMagic 	= null;
Personnage.prototype._defPhy 	= null;
Personnage.prototype._degats 	= null;


//Accesseurs


Personnage.prototype.getHTMLNode = function()
{
	return this._elem;
};

Personnage.prototype.setPv = function(value){
	this._pv = value;
}

Personnage.prototype.getPv = function(){
	return this._pv;
}

Personnage.prototype.setDefMagic = function(value){
	this._defMagic = value;
}

Personnage.prototype.getDefMagic = function(){
	return this._defMagic;
}

Personnage.prototype.setDefPhy = function(value){
	this._defPhy = value;
}

Personnage.prototype.getDefPhy = function(){
	return this._defPhy;
}

//méthodes de Personnage

Personnage.prototype.move	= function(param_x, param_y, param_speed)
{
	TweenMax.to(this, 
				param_speed, 
				{
					"x": param_x, 
					"y": param_y, 
					onUpdate: this.draw.bind(this),
					ease: Elastic.easeOut
				} 
			);
};

Personnage.prototype.parler = function(){
	alert("Je parle");
};

Personnage.prototype.getDamages = function(x){
	this._pv -= x;
};

Personnage.prototype.isDead = function(){
	return this._pv <= 0 ? true : false;
};

Personnage.prototype._getStateInfo = function()
{
	if( this.currentState == null || 
		this._states[this.currentState] == undefined 
	)
	{
		return null;
	}
	
	
	return this._states[this.currentState];
};

Personnage.prototype.draw	= function()
{
	var state 	= this._getStateInfo();
	var decalX 	= 0;
	var decalY 	= 0;
	var width 	= 0;
	var height 	= 0;
	
	
	if( state != null )
	{
		decalX 	= -state.x;
		decalY 	= -state.y;
		width	= state.width;
		height	= state.height;
	}
	
	$(this._elem).css(
		{
			"background-image": "url('"+this.img+"')"		,
			"width": width+"px"								,
			"height":height+"px"							,
			"background-position": decalX+"px "+decalY+"px" ,
			"position": "absolute"							,
			"top": this.y + "px"							,
			"left"	: this.x + "px"						
		}
	);
};


