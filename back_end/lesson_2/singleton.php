<?php
class Ballon
{

	//static	
	static private $_instance = null;
	
	static public function getInstance($param_color = null)
	{
		// si notre variable statique $_instance est égale à null
		if ( self::$_instance === null )
		{
			// alors on crée une nouvelle instance de Ballon qui 
			// sera stockée dans self::$_instance
			self::$_instance = new Ballon($param_color);
		}
		
		// on retourne la même instance à chaque fois
		return self::$_instance;
	}
	
	
	// object
	
	public $color = null;
	
	public function Ballon($param_color)
	{
		// si l'instance a déjà été définie, alors on ne doit pas pouvoir entrer 
		// une deuxième fois dans un constructeur, car on veut une seule et unique instance
		// de ballon.
		if ( self::$_instance != null )
		{
			//permet de "jeter" une exception qui a vocation à interrompre le code 
			// à moins d'être attrapée (catch).
			// cette exception, est là pour notifier d'une situation "irrégulière" 
			// ou suffisamment exceptionnelle pour justifier d'une interruption du code
			// ou d'une gestion particulière de celui-ci.
			throw( new Exception("singleton error !") );
		}
		else
		{
			$this->color = $param_color;
			self::$_instance = $this;
		}
		
	}
}


try
{
	new Ballon("rouge");
	new Ballon("noir");
}
catch(Exception $exception)
{
	// code qui prévoit une alternative
	var_dump($exception->getMessage());
}



if( Ballon::getInstance("red") !== null && 
	Ballon::getInstance() === Ballon::getInstance() 
)
{
	echo Ballon::getInstance()->color;
}
else
{
	echo 'error =(';
}




