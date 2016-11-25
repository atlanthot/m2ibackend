function combat(obj){
	var mere_theresa = new Wizard("Mère Theresa","Barde",50);
	var robocop = new Warrior("Robocop","Justicier");
	
	robocop.setWeaponRight( new Weapon(obj["armeWarrior"][Math.round(Math.random() * 2)]) );
	robocop.setWeaponLeft( new Weapon(obj["armeWarrior"][Math.round(Math.random() * 2)]) );
	mere_theresa.setWandstick( new Baton(obj["armeWizard"][Math.round(Math.random() * 2)]) );
	
	console.log(robocop,'\n',mere_theresa);
	console.log("*********************************************************");
	while( !mere_theresa.isDead() && !robocop.isDead() ){
		console.log(robocop.nom + " : "+ robocop.getPv() + " | " + mere_theresa.nom + " : "+ mere_theresa.getPv()+' - '+ mere_theresa.getMana());
		mere_theresa.attack(robocop);
		if( robocop.isDead() ){
			break;
		}

		robocop.attack(mere_theresa);
		
		console.log("-------------------------------------------------------");
	}
	console.log(robocop.isDead() ? "Mort de robocop" : "Mort de Mamie");
};

