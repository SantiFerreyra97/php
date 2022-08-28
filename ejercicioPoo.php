<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Persona{
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function setDni($dni){ $this->dni = $dni; }
    public function getDni(){ return $this->dni; }

    public function setNombre($nombre){ $this->nombre = $nombre;}
    public function getNombre(){ return $this->nombre; }
    
    public function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad; }
    public function getNacionalidad(){ return $this->nacionalidad; }
    
    public function setEdad($edad){ $this->edad = $edad; }
    public function getEdad(){ return $this->edad; }

};
class Alumno extends Persona{
    private $legajo;
    private $notaPortfolio;
    private $notaPhp;
    private $notaProyecto;

    public function __construct(){
        $this ->notaPortfolio = 0.0;
        $this ->notaPhp = 0.0;
        $this ->notaProyecto = 0.0;
    }
    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }

    

    public function imprimir(){
        echo "Alumno: " . $this-> legajo. "<br>";
        echo "Documento: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Nota del Portfolio: " . $this->notaPortfolio . "<br>";
        echo "Nota del PHP: " . $this->notaPhp . "<br>";
        echo "Nota del Proyecto: " . $this->notaProyecto . "<br>";
        echo "Promedio: " . number_format($this->calcularPromedio(), 2, ",", ".") . "<br><br>";
    }

    public function calcularPromedio(){        
        return ($this->notaPortfolio + $this->notaPhp + $this->notaProyecto) /3 ;
    }
}

class Docente extends Persona{
        private $especialidad;
        const ESPECIALIDAD_WP = "Wordpress";
        const ESPECIALIDAD_ECO = "Economía aplicada";
        const ESPECIALIDAD_BBDD = "Base de datos";


        public function imprimir(){
        echo "Docente: " . $this->nombre . "<br>";
        }
        public function imprimirEspecialidadesHabilitadas(){
            echo "Un docente puede tener las siguientes especialidades:<br> "; 
            echo "Especialidad 1:" . self::ESPECIALIDAD_BBDD . "<br>";
            echo "Especialidad 1:" . self::ESPECIALIDAD_ECO . "<br>";
            echo "Especialidad 1:" . self::ESPECIALIDAD_WP . "<br>";
        }
    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor)
    {
        $this->$propiedad = $valor;
    }



} 

//Programa

$alumno1 = new Alumno();
$alumno1 ->dni = "40203038";
$alumno1 ->nombre = "Santiago Ferreyra";
$alumno1 ->notaPortfolio = 3;
$alumno1 ->notaPhp = 7;
$alumno1 ->notaProyecto = 8;
$alumno1 ->imprimir();

$docente1 = new Docente();
$docente1 -> nombbre = "Estela" ;
$docente1 -> imprimirEspecialidadesHabilitadas();
print_r($docente1);




?>