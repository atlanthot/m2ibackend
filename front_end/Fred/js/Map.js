
// MAP OBJECT

function Map(cols,rows,jsonFile){

	console.log("Objet initialisé");

	this.cols 		=	cols;
	this.rows 		=	rows;
	this.jsonData	=	null;
	this.jsonFile	=	jsonFile;

	$('.map-container').width(cols*48);
	$('.map-container').height(rows*48);

}

Map.prototype.generate = function(){

	var scope = this;

	$.ajax({
		type: 		"GET",
		dataType: 	"json",
	  	url: 		scope.jsonFile
	})
  	.done(function(data) {

  		scope.jsonData		= data;
		var id 				= null;
		var groundMap 		= data.ground;
		var mapContainer 	= $('.map-container');

		for(row = 0; row < groundMap.length; row++) // ROW
		{
			for(col = 0; col < groundMap[row].length; col++) // COL
			{
				id = groundMap[row][col];
				mapContainer.append('<div class="tile" id="row-'+ row +'-col-'+ col +'"></div>');
				$('#row-'+ row +'-col-'+ col).css('background-image','url("'+ data.tabCorrespondance[id].imgUrl +'.png")');
				

			}
		}

		console.log("Map généré avec " + scope.jsonFile);
	})
	.fail(function(xhr, textStatus, errorThrown){

	  	console.log(textStatus);
	 });

	return true;
}