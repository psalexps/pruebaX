<?php

class EmpleadosController{
    private $conectar;
    private $conexion;

    public function __construct(){
        require_once __DIR__ . "/../model/clases/Conexion.php";
        require_once __DIR__ . "/../model/clases/Empleado.php";

        $this->conectar=new Conexion();
        $this->conexion=$this->conectar->conexion();
    }

    public function view($vista,$datos){
        $empleados = $datos["empleados"];
        require_once  __DIR__ . "/../view/" . $vista . "View.php";

    }

    /*Acciones;index,alta,borrar,detalles,update*/
    public function run($accion){
        try{
            $this->$accion();
        }
        catch (Error $e){
            $this->index();
        }
    }

    public function index(){

        $empleado=new Empleado($this->conexion);
        $empleados=$empleado->getAll();
        $this->view("index",array(
            "empleados"=>$empleados,
        ));
    }

    public function alta(){
        if(isset($_POST["nombre"])){
            $empleado=new Empleado($this->conexion);
            $empleado->setNombre($_POST["nombre"]);
            $empleado->setApellidos($_POST["apellidos"]);
            $empleado->setEmail($_POST["email"]);
            $empleado->setTelefono($_POST["telefono"]);
            $empleado->save();
        }
        header('Location: index.php');
    }

    public function borrar(){
        $empleado=new Empleado($this->conexion);
        $empleado->setId($_GET['id']);
        $empleado->del();

        header('Location: index.php');
    }

    public function detalles(){
        $empleado=new Empleado($this->conexion);
        $empleado->setId($_GET['id']);
        $empleados=$empleado->getDetalles();
        $this->view("detallesEmpleados",array(
            "empleados"=>$empleados,
        ));

    }

    public function update(){
        $empleado=new Empleado($this->conexion);
        $empleado->setId($_POST['id']);
        $empleado->setNombre($_POST["nombre"]);
        $empleado->setApellidos($_POST["apellidos"]);
        $empleado->setEmail($_POST["email"]);
        $empleado->setTelefono($_POST["telefono"]);
        $empleado->update();

        header('Location: index.php');

    }

}