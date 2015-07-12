<?php


	class aula {

		$profesor = null;
		$alumnos = Array ();

		public function __construct ($profesor) {
			$this->profesor = $profesor;
		}

		public function agregarAlumno ($alumnos) {
			$this->alumnos [] = $alumno;
		}

		public function darClase () {
			echo "Se dio clase a ". sizeof($this->alumnos). " alumnos";
		}

	}	

	class persona {

		$color_pelo = null;
		$color_ojos = null;
		$altura = null;

		public function __construct ($color_pelo, $color_ojos, $altura) {
			$this->color_ojos = $color_ojos;
			$this->color_pelo = $color_pelo;
			$this->altura = $altura;
		}

		public function verPersona () {
			echo $this->color_pelo." ".$this->color_ojos." ".$this->altura;
		}

	}

	class alumno extends persona {

		$notas = null;

		public function __construct () {

		}

		public function verNotas () {
			echo $this->notas;
		}

	}

	class profesor extends persona {

		$legajo = null;

		public function __construct ($l) {
			$this->legajo = $l;
		}

		public function verLegajo () {
			echo $this->legajo;
		}

	}





































	$p = new profesor (55756);

	$aula = new aula ($p);

?>