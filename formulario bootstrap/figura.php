<?php
class figura {
	public $nombre;
	public $color;
	
	function __construct(){
		$this->nombre="";
		$this->color="";
		
		
	}
	
	
}

class cuadrado extends figura{
	public $lado;
	function __construct(){
		$this->lado=0;
		
	}
	
	function area (){
		return $this->lado*$this->lado;
	}
	
	function inicializar($n,$c,$lado){
		$this->nombre=$n;
		$this->color=$c;
		$this->lado=$lado;
	}
	
	}

	$figura = new cuadrado();
	$figura->inicializar("cuadradito","#CCA326",270);
echo $figura->area();
		
	?>


<?php


    class figura {
	 public $nombre;
	  public $color;
	
	    function __construct(){
			
			$this->nombre="";
		    $this->color="";
		
		
	}
	
	
}

class triangulo extends figura{
	
	public $base;
	    
		public $altura;
	
	function __construct(){
		$this->base=0;
		$this->altura=0;
		
	}
	
	function area (){
		return $this->base*$this->altura/2;
	}
	
	function inicializar($n,$c,$base,$altura){
		$this->nombre=$n;
		$this->color=$c;
		$this->base=$base;
		$this->altura=$altura;
	}
	
	}

	$figura = new triangulo();
	
	$figura->inicializar("triangulito","#CCA326",20,20);
echo $figura->area();
		
	?>