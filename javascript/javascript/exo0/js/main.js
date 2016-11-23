// ES5
"use strict";



function google(param_event)
{
	alert("youpi !");
}

function start(param_event)
{
	var mon_bouton = document.getElementById("super_bouton");
	
	mon_bouton.addEventListener("click", google);
	
	window.removeEventListener("load", start);
}

window.addEventListener("load", start);



