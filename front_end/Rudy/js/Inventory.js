
function Inventory(){

}

Inventory.prototype._items = [];
Inventory.prototype._maxWeight = 200;

Inventory.prototype.addItem = function(item){
	//if(item instanceof Item){
	this._items.push(item);
	return true;
	//}else{
	//	return false;
	//}
}

Inventory.prototype.getItems = function(){
	console.log('Liste des objets de l\'inventaire');
	for(var i= 0; i < this._items.length; i++)
	{
	     console.log(this._items[i]);
	}

}


