function parse(data)
{
	var id = null;
	var map = data.terrain;
	for(row = 0; row < map.length; row++)
	{
		for(col = 0; col < map[row].length; col++)
		{
			id = map[row][col];
			$('.map-container').append('<div class="tile" id="row-'+ row +'-col-'+ col +'"></div>');
			$('#row-'+ row +'-col-'+ col).css('background-image','url("'+ data.tabCorrespondance[id].imgUrl +'.png")');
		}
	}
}

function error()
{
	console.log('erreur JSON');
}

function main(){
	var ma_requete = $.ajax("mapWorld.json", "GET");
	ma_requete.done(parse);
	ma_requete.fail(error);
}

window.addEventListener("load", main);

