//ES5

/* 

Java
Script
Object
Notation

DESIGN PATTERN / OBSERVER
Déclencher du code lorsqu'un évènement se produit sans que l'on puisse prévoir
quand il va se produire

Le systeme qui émet l'évènement doit laisser la possibilité à un évènemet extérieur de souscrire à un "abonnement" sous forme d'un contrat. Lorsque
l'évènement se produit, le système gérant l'évènement doit se charger d'éxécuter le contrat.

*/

//"use strict"; 

/*
class Polygone {
  constructor(hauteur, largeur) {
    this.hauteur = hauteur;
    this.largeur = largeur;
  }
 
  get area() {
    return this.calcArea();
  }

  calcArea() {
    return this.largeur * this.hauteur;
  }
}

const carré = new Polygone(10, 10);

console.log(carré.area);

*/

/*
function ajaxGetRequest(url, callback){
	var ajaxObj = new XMLHttpRequest(); //AJAX ASNCHRONOUS JAVASCRIPT XML

	ajaxObj.addEventListener("readystatechange", function(event){
		var ajaxObj = event.target;
		if( ajaxObj.readyState == 4 && ajaxObj.status == 200 ) //4 fin de la requete
		{
			try{
				var jsonDatas = JSON.parse(ajaxObj.responseText);
				callback(jsonDatas); // Fonction callback;
			}
			catch(error){
				console.log(error);
			}
		}
	});

	ajaxObj.open("GET",url, true);
	ajaxObj.send(null);
}
*/





/*
function pickRandomWeapon(jsonDatas){

	var datas = jsonDatas.data;
	var champs = jsonDatas.champs;
	var nbAleat = Math.round(Math.random() * (datas.length -1)); // Arme aleatoire dans le Json
	// Défini une nouvelle arme de type Weapon
	var weapon = new Weapon(datas[nbAleat].name, datas[nbAleat].type, "150", "30", datas[nbAleat].damages);
	console.log(weapon.name);

}

*/


/*
function start()
{
	faireHeriter(Character, Warrior);
	faireHeriter(Character, Wizard);

	var warrior = new Warrior("Conan", "140", "0","30","15"); // Création d'un guerrier
	var wizard = new Wizard("Elminster", "100", "100", "15", "30"); // Création d'un magicien
	var inventory = new Inventory();
	
	//ajaxGetRequest("weapons.json", pickRandomWeapon); // Appel d'une arme aleatoire dans le json

}

*/


/*
var champs = jsonDatas.champs //obj.champs
var data = jsonDatas.data;
var html = '';
var prop = null;

var weaponAleat = Math.round(Math.random() * (data.length -1)); // Arme aleatoire dans le Json
console.log(data[weaponAleat].name);

*/




//window.addEventListener("load", start);

/*
const VITESSE_Character = 10;


var toto = new Array();

toto[0] = "first";
toto[1] = null;
toto[2] = "third";

toto = ['1','deux', 'trois'];



/* toto = new Object();

toto.nom = "Rudy";
toto.age = "29";

// Delete n'est valable que pour les proprioté créées a la volée
delete toto.nom;
//toto = {};


// JSON

toto = {
	"nom": ['rudy', 'carton'],
	"age": 29 
};

console.log(toto);



function test(){

}

var farid = new Object();
farid.nom = "farid";

farid.sayMyName = function(){
	alert(this.nom);
};

var ma_fonction = farid.sayMyName.bind(farid); // Référence - clone , Bind permet d'utiliser this

ma_fonction();


var character = new Object();
character.x = 20;
character.y = 30;
character.nom = "Dovakhiin";

character.move = function(moveX,moveY){
	this.x += moveX;
	this.y += moveY;

	console.log("perso a avancé en X de " +character.x);
	console.log("perso a avancé en X de " +character.y);
};

character.move(10,10);


var prop = null;
var toto = {
	"nom":"toto",
	"age": 29
}

for( prop in toto){
	console.log(toto[prop]);
}

*/

/* construire deux objets = Magicien, Guerrier

Boucle combat : le premier a zero arrete la boucle

*/

/* ------------------------------------
				Weapon
-------------------------------------- 

function Weapon(name,damages){
	this.name = name;
	this.damages= damages;
}

Weapon.prototype.name = null;
Weapon.prototype.consoMana = 0;
Weapon.prototype.damages = 0;


/* ------------------------------------
				WARRIOR
-------------------------------------- 

function Warrior(name,pv,mana){ // fonction constructif
	this.name = name;
	this._pv = pv;
	this._mana = mana;
}

Warrior.prototype.name 	= null;
Warrior.prototype._pv 	= 0;
Warrior.prototype._mana 	= 0;
Warrior.prototype.baseAttack 	= 10;
Warrior.prototype.leftHand 	= null;
Warrior.prototype.rightHand = null;

Warrior.prototype.attack	=	function(ennemi){
	console.log(this.leftHand);
	var damages;
	if(this.leftHand == null && this.rightHand == null){
		damages = this.baseAttack + Math.floor(Math.random() *10); // Calcul des dégats
	}else{
		alert('test');
		if(this.leftHand != null){
			damages =+ this.leftHand.damages;
		}
		if(this.rightHand != null){
			damages =+ this.rightHand.damages;
		}
	}
	
	ennemi.getDamages(damages);
	console.log(this.name + " inflige " + damages + " points de dégâts à " + ennemi.name + " (" + ennemi._pv + ")");
}

Warrior.prototype.getDamages	=	function(damages){
	this._pv -= damages; //  Warrior2 perd x _pv
	if(this._pv <= 0){
			this._pv = 0;
			this.isAlive = false;
	}
}

Warrior.prototype.isDead	=	function(){
	if(this._pv <= 0){
		return true;
	}else{
		return false;
	}
}

Warrior.prototype.equipWeapon	= function(weapon, hand){
	console.log(hand);


	if(hand === "left"){
		this.leftHand == weapon;
		alert(this.leftHand);
	}
	if(hand === "right"){
		this.rightHand == weapon;
		alert(this.rightHand);
	}
}






/* ------------------------------------
				MAGIC WAND
--------------------------------------

function MagicWand(name,mana,damages){
	this.name = name;
	this.consoMana= mana;
	this.damages= damages;
}

MagicWand.prototype.name = null;
MagicWand.prototype.consoMana = 0;
MagicWand.prototype.damages = 0;


/* ------------------------------------
				MAGE
--------------------------------------


function Mage(name,pv,mana){ // fonction constructif
	this.name 	= name;
	this._pv 	= pv;
	this._mana 	= mana;
}

Mage.prototype.name 	= null;
Mage.prototype._pv 	= 0;
Mage.prototype._mana 	= 0;
Mage.prototype.baseAttack 	= 5;
Mage.prototype.weapon = null;

Mage.prototype.attack	=	function(ennemi){
	if(this._mana >= 0 && this.weapon != null && (this._mana >= this.weapon.consoMana)){
		var damages = this.weapon.damages + Math.floor(Math.random() *10); // Calcul des dégats
		this._mana -= this.weapon.consoMana;
		ennemi.getDamages(damages);
		console.log(this.name + " utilise " +this.weapon.name + " et inflige " + damages + " points de dégâts à " + ennemi.name + " (" + ennemi._pv + ")");
	}else{
		var damages = 5 + (Math.floor(Math.random() *10));
		console.log(this.name + ' n\'a plus de mana et attaque au CaC en infligeant ' +damages+ " de dégâts à "+ ennemi.name + " (" + ennemi._pv + ")");
		ennemi.getDamages(damages);
	}
}

Mage.prototype.getDamages	=	function(damages){
	this._pv -= damages; //  Warrior2 perd x _pv
	if(this._pv <= 0){
			this._pv = 0;
			this.isAlive = false;
	}
}

Mage.prototype.equipWand = function(wand){
	this.weapon = wand;
}

Mage.prototype.isDead	=	function(){
	if(this._pv <= 0){
		return true;
	}else{
		return false;
	}
}


var axe = new Weapon("Hache", 20);
var sword = new Weapon("Epée", 15);
var fireWand = new MagicWand("Baguette de feu", 25, 30);

var warrior = new Warrior("Conan", 140, 0);

warrior.equipWeapon(sword,"left");
warrior.equipWeapon(axe,"right");


var mage = new Mage("Merlin", 90, 100);
mage.equipWand(fireWand);


while(!warrior.isDead() && !mage.isDead()){
	warrior.attack(mage);
	if(mage.isDead()){
		console.log(mage.name + " est mort ! ");
		break;
	}
	mage.attack(warrior);
	if(warrior.isDead()){
		console.log(warrior.name + " est mort ! ");
		break;
	}
}


/*
var warrior = {
	name: null,
	_pv : 100, // Privé
	mana: 0,
	baseAttack: 10,
	isAlive : true,

	init: function(name){
		this.name = name
	},

	attack: function (ennemi){ // WARRIOR 1 attack WARRIOR 2
		var damages = this.baseAttack + Math.floor(Math.random() *10); // Calcul des dégats
		ennemi.getDamages(damages);

		console.log(this.name + " inflige " + damages + " points de dégâts à " + ennemi.name + " (" + ennemi._pv + ")");

	},

	getDamages: function(damages){
		this._pv -= damages; //  Warrior2 perd x _pv
		if(this._pv <= 0){
			this._pv = 0;
			this.isAlive = false;
		}
	},

	isDead: function(){
		if(this._pv <= 0){
			return true;
		}else{
			return false;
		}
	}
}

var mage = {
	name: null,
	_pv : 100,
	mana: 100,
	baseAttack: 10,

	init: function(name){
		this.name = name;
	},

	attack: function (ennemi){
		var damages = this.baseAttack + Math.floor(Math.random() *10); // Calcul des dégats
		ennemi.getDamages(damages); // ennemi se prend les dégats
		
		console.log(this.name + " inflige " + damages + " points de dégâts à " + ennemi.name + " (" + ennemi._pv + ")");
	},

	getDamages: function(damages){
		this._pv -= damages; //  perso perd x _pv
		
	},

	isDead: function(){
		if(this._pv <= 0){
			return true;
		}else{
			return false;
		}
	}
}


warrior.init("Dovakhiin");
mage.init('Doctor Strange');

while(!warrior.isDead() && !mage.isDead()){
	warrior.attack(mage);
	if(mage.isDead()){
		console.log(mage.name + " est mort ! ");
		break;
	}
	mage.attack(warrior);
	if(warrior.isDead()){
		console.log(warrior.name + " est mort ! ");
		break;
	}
}

*/









