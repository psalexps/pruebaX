<?php

class bodegasController{
    private $conectar;
    private $conexion;

    public function __construct(){
        require_once __DIR__.'/../model/clases/Conexion.php';
        require_once __DIR__.'/../model/clases/Bodega.php';
        require_once __DIR__.'/../model/clases/Vino.php';

        $this->conectar = new Conexion();
        $this->conexion = $this->conectar->conexion();
    }

    public function view($vista,$datos){

        require_once __DIR__."/../view/".$vista."View.php";
    }

    /*Acciones de run : index*/
    public function run($accion){

        try {

            $this->$accion();
        }
        catch (Error $e){

            $this->index();
        }
    }

    public function index(){

        $bodega = new Bodega($this->conexion);
        $bodegas = $bodega->getAll();

        $this->view('index', array(
            'bodegas'=>$bodegas
        ));
    }

    public function newBodega(){
        $this->view('newBodega',null);
    }

    public function altaBodega(){

        if (isset($_POST['nombreBodega'])){

            $bodega = new Bodega($this->conexion);
            $bodega->setNombre($_POST['nombreBodega']);
            $bodega->setDireccion($_POST['direccionBodega']);
            $bodega->setEmail($_POST['emailBodega']);
            $bodega->setTelefono($_POST['telefonoBodega']);
            $bodega->setPersonaContacto($_POST['personaContactoBodega']);
            $bodega->setAnnoFundacion($_POST['annoFundacionBodega']);
            $bodega->setDisponibleRestaurante($_POST['disponibleRestauranteBodega']);
            $bodega->setDisponibleHotel($_POST['disponibleHotelBodega']);
            $bodega->insert();
        }

        header('Location: index.php');
    }

    public function borrar(){

        $bodega = new Bodega($this->conexion);
        $bodega->setId($_GET['idBodega']);
        $bodega->del();

        header('Location: index.php');
    }

    public function detallesBodega(){

        $bodega = new Bodega($this->conexion);
        $vino = new Vino($this->conexion);
        $bodega->setId($_GET['idBodega']);
        $vinos = $vino->getAllIdBodega($bodega->getId());
        $bodega->setVinos($vinos);

        $bodegas = $bodega->detalles();

        $this->view('detallesBodega',array(
            "bodegas"=>$bodegas,
            "vinos"=>$vinos
        ));
    }

    public function updateBodega(){

        $bodega = new Bodega($this->conexion);
        $bodega->setNombre($_POST['nombreBodega']);
        $bodega->setDireccion($_POST['direccionBodega']);
        $bodega->setEmail($_POST['emailBodega']);
        $bodega->setTelefono($_POST['telefonoBodega']);
        $bodega->setPersonaContacto($_POST['personaContactoBodega']);
        $bodega->setAnnoFundacion($_POST['annoFundacionBodega']);
        $bodega->setDisponibleRestaurante($_POST['disponibleRestauranteBodega']);
        $bodega->setDisponibleHotel($_POST['disponibleHotelBodega']);
        $bodega->update($_GET['idBodega']);

        header('Location: index.php?controller=bodegas&action=detallesBodega&idBodega='.$_GET['idBodega']);
    }

}