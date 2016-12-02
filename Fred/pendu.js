/*
Choisir un mot au hasard parmi une liste prédéfinie
initialiser le nb de chances et le stocker dans une variable nb_chance
stocker le mot dans une variable current_mot
créer un tableau "pendu" de lettres contenues dans current_mot
créer un tableau "histo" rempli avec des étoiles

tant que nb_chance est différent de 0 et mot != current_mot 
	décrémenter le nb_chance
	Récupérer la lettre saisie
	si la lettre saisie est présente dans le mot i.e contenu dans le tableau "pendu"
	alors 
		mettre à jour les lettres du mot touvées
		mettre à jour le tableau "histo"
		s'il reste des étoiles dans le tableau "histo" et chance est différent de 0
		alors continuer
		sinon fin de partie
Fin tant que
*/

var liste_mot = ["ANGLE", 
				"ARMOIRE", 
				"BANC", 
				"BUREAU", 
				"CABINET", 
				"CARREAU", 
				"CHAISE", 
				"CLASSE", 
				"CLEF", 
				"COIN", 
				"COULOIR", 
				"DOSSIER", 
				"EAU", 
				"ECOLE", 
				"ENTRER", 
				"ESCALIER", 
				"ETAGERE", 
				"EXTERIEUR", 
				"FENETRE", 
				"INTERIEUR", 
				"LAVABO", 
				"LIT", 
				"MARCHE", 
				"MATELAS", 
				"MATERNELLE",
				"BIBLIOTHEQUE", 
				"IMAGE",
				"ALBUM", 
				"TITRE", 
				"CONTE", 
				"DICTIONNAIRE", 
				"MAGAZINE", 
				"CATALOGUE", 
				"PAGE", 
				"LIGNE", 
				"MOT", 
				"ENVELOPPE", 
				"ETIQUETTE", 
				"CARTE", 
				"APPEL", 
				"AFFICHE", 
				"ALPHABET", 
				"APPAREIL", 
				"CAMESCOPE", 
				"CASSETTE",
				"CHAINE", 
				"CHANSON", 
				"CHIFFRE", 
				"CONTRAIRE", 
				"DIFFERENCE", 
				"DOIGT", 
				"ECRAN", 
				"ECRITURE" ]
				
current_mot = liste_mot[Math.floor(Math.random() * (liste_mot.length - 1))];
var pendu = current_mot.split("");
var chance = 2 * pendu.length;
var histo = new Array();

for(i = 0;i < pendu.length; i++)
{
	histo[i] = "*";
}
console.log(current_mot);

function clicked()
{
	
	var mot = "";
	var mon_input = document.getElementById("my_input");
	var lettre = mon_input.value.toUpperCase();
	var html = "";

	chance--;
	ind = pendu.indexOf(lettre);
	if( ind != -1)
	{
		
		for(i = 0;i < pendu.length; i++)
		{	
			ind2 = pendu.indexOf(lettre,i);
			if( i == ind2)
			{
				histo[i] = lettre;
			}
		}
	}
	for(i = 0;i < histo.length; i++)
		{html += "<div id='lettre" + i + "' style='float:left'>" + histo[i] + "</div>";}

	
	html += "<br/><div>nb de chances : " + chance + "</div>"; 
	
	my_container = document.getElementById("container");
	my_container.innerHTML = html;

	my_input.value = "";
	my_input.focus();
	
	if(histo.indexOf("*") == -1)
	{
		document.body.innerHTML = "<img src='gagner.jpg'>";
		alert('Gagné !');
			}
	else if(chance == 0 )
	{
		document.body.innerHTML = "<img src='perdre.jpg'>";
		alert("Perdu ! \n le mot à trouver était : " + current_mot);
		
	}
}
function start()
{
	var mon_button = document.getElementById("my_button");
	mon_button.addEventListener("click",clicked);
}

window.addEventListener("load",start);





