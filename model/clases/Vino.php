<?php

class Vino{
    private $table = "vinos";
    private $conexion;

    private $id;
    private $nombre;
    private $descripcion;
    private $anno;
    private $alcohol;
    private $tipoVino;

    public function __construct($conexion){
        $this->conexion=$conexion;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * @param mixed $anno
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;
    }

    /**
     * @return mixed
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * @param mixed $alcohol
     */
    public function setAlcohol($alcohol)
    {
        $this->alcohol = $alcohol;
    }

    /**
     * @return mixed
     */
    public function getTipoVino()
    {
        return $this->tipoVino;
    }

    /**
     * @param mixed $tipoVino
     */
    public function setTipoVino($tipoVino)
    {
        $this->tipoVino = $tipoVino;
    }

    public function getAllIdBodega($idBodega){

        $select = $this->conexion->prepare("SELECT id,nombre,tipoVino FROM vinos WHERE idBodega = ? ");
        $select->BindPAram(1, $idBodega);
        $select->execute();
        $result = $select->fetchAll();
        $this->conexion = null;

        return $result;
    }

    public function insert($idBodega){

        $insert = $this->conexion->prepare("INSERT INTO vinos(nombre,descripcion,anno,alcohol,tipoVino,idBodega) VALUE(:nombre,:descripcion,:anno,:alcohol,:tipoVino,:idBodega)");

        $insert->execute(array(
            ":nombre" => $this->nombre,
            ":descripcion" => $this->descripcion,
            ":anno" => $this->anno,
            ":alcohol" => $this->alcohol,
            ":tipoVino" => $this->tipoVino,
            ":idBodega" => $idBodega
        ));
    }

    public function del(){

        $delete = $this->conexion->prepare("DELETE FROM vinos WHERE id = ? ");
        $delete->BindPAram(1, $this->id);
        $delete->execute();

        $this->conexion = null;
    }

    public function getAll(){

        $select = $this->conexion->prepare("SELECT id,nombre,descripcion,anno,alcohol,tipoVino,idBodega FROM vinos WHERE id = ? ");
        $select->BindPAram(1, $this->id);
        $select->execute();
        $result = $select->fetchAll();

        $this->conexion = null;
        return $result;
    }

    public function update($idVino){

        $update = $this->conexion->prepare("UPDATE vinos SET nombre=:nombre,descripcion=:descripcion,anno=:anno,alcohol=:alcohol,tipoVino=:tipoVino WHERE id = :id ");

        $update->execute(array(
            ":id" => $idVino,
            ":nombre" => $this->nombre,
            ":descripcion" => $this->descripcion,
            ":anno" => $this->anno,
            ":alcohol" => $this->alcohol,
            ":tipoVino" => $this->tipoVino
        ));
    }

}