
// MAP OBJECT

function Map(cols,rows,jsonFile)
{
	this.cols 		=	cols;
	this.rows 		=	rows;
	this.jsonData	=	null;
	this.jsonFile	=	jsonFile;
	this.tiles		= 	new Array();
	this.width		= cols* CASE_WIDTH;
	this.height		= rows* CASE_HEIGHT;

	//var mapContainer 	= this._getContainer();
	//mapContainer.width(this.width);
	//mapContainer.height(this.height);
}

Map.prototype.cols = 0;
Map.prototype.rows = 0;
Map.prototype.width = 0;
Map.prototype.height = 0;
Map.prototype.jsonData = 0;
Map.prototype.jsonFile = 0;
Map.prototype.tiles = null;

Map.prototype._loadSuccess = function(param_data)
{
	this.jsonData		= param_data;
	var id 				= null;
	var groundMap 		= param_data.ground;
	var mapContainer 	= this._getContainer();
	var currentTile		= null;

	for(row = 0; row < groundMap.length; row++) // ROW
	{
		for(col = 0; col < groundMap[row].length; col++) // COL
		{
			id = groundMap[row][col];
			
			currentTile = new Tile(
									row, 
									col, 
									param_data.tabCorrespondance[id].imgUrl,
									param_data.tabCorrespondance[id].walkable
								);
								
			this.tiles.push(currentTile);
								
			mapContainer.append(currentTile.getHTML());
			currentTile.draw();
		}
	}
	
	this.onSuccess();
};

Map.prototype._getContainer = function()
{
	var mapContainer 	= $('#map');
	return mapContainer;
};


Map.prototype.getTileByRowAndCol = function(row, col)
{
	var i = this.tiles.length;
	
	while( --i > -1 )
	{
		if( this.tiles[i].row == row && this.tiles[i].col == col )
			return this.tiles[i];
	}
	
	return null;
};

Map.prototype.addPersonnage = function(personnage)
{
	var mapContainer 	= this._getContainer();
	mapContainer.append( personnage.getHTMLNode() );
};


Map.prototype.generate = function(param_callbackSuccess, param_callbackFail)
{
	this.tiles 		= new Array();
	this.onSuccess 	= param_callbackSuccess;
	
	$.ajax(
	{
		type: 		"GET",
		dataType: 	"json",
	  	url: 		this.jsonFile
	}
	).done( this._loadSuccess.bind(this) )
	.fail( param_callbackFail );
};

