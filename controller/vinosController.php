<?php

class vinosController{
    private $conectar;
    private $conexion;

    public function __construct(){
        require_once __DIR__.'/../model/clases/Conexion.php';
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

    public function newVinos(){

        $this->view('newVinos',null);
    }

    public function altaVino(){

        if (isset($_POST['nombreVino'])){

            $vino = new Vino($this->conexion);
            $vino->setNombre($_POST['nombreVino']);
            $vino->setDescripcion($_POST['descVino']);
            $vino->setAnno($_POST['annoVino']);
            $vino->setAlcohol($_POST['alcoholVino']);
            $vino->setTipoVino($_POST['tipoVino']);
            $vino->insert($_GET['idBodega']);
        }

        header('Location: index.php?controller=bodegas&action=detallesBodega&idBodega='.$_GET['idBodega']);
    }

    public function delVino(){

        $vino= new Vino($this->conexion);
        $vino->setId($_GET['idVino']);
        $vino->del();

        header('Location: index.php?controller=bodegas&action=detallesBodega&idBodega='.$_GET['idBodega']);
    }

    public function detallesVino(){

        $vino = new Vino($this->conexion);
        $vino->setId($_GET['idVino']);

        $vinos = $vino->getAll();

        $this->view('detallesVino',array(
           "vinos" => $vinos
        ));
    }

    public function updateVino(){

        if (isset($_POST['nombreVino'])){

            $vino = new Vino($this->conexion);
            $vino->setNombre($_POST['nombreVino']);
            $vino->setDescripcion($_POST['descVino']);
            $vino->setAnno($_POST['annoVino']);
            $vino->setAlcohol($_POST['alcoholVino']);
            $vino->setTipoVino($_POST['tipoVino']);
            $vino->update($_GET['idVino']);
        }

        header('Location: index.php?controller=vinos&action=detallesVino&idVino='.$_GET['idVino']);
    }
}