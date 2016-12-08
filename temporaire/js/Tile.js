function Tile(row, col, img, walkable)
{
	this.row = row;
	this.col = col;
	this.img = img;
	this.walkable = walkable;
}

Tile.prototype.img 		= null;
Tile.prototype.row 		= 0;
Tile.prototype.col 		= 0;
Tile.prototype.walkable = false;

Tile.prototype.getHTML = function()
{
	var html = "";
	html = '<div class="tile" id="row-';
	html += this.row + '-col-' + this.col;
	html += '"></div>';

	return html;
};

Tile.prototype.draw = function()
{
	$('#row-'+ row +'-col-'+ col).css(
		{
			"background-image":'url("'+ this.img  +'.png")',
			"left":this.col * CASE_WIDTH+"px",
			"top":this.row * CASE_HEIGHT+"px",
			"z-index": 10
		}
	);
};

