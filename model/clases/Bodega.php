<?php

class Bodega{
    private $table = "bodegas";
    private $conexion;

    private $id;
    private $nombre;
    private $direccion;
    private $email;
    private $telefono;
    private $personaContacto;
    private $annoFundacion;
    private $disponibleRestaurante;
    private $disponibleHotel;

    private $vinos;

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
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getPersonaContacto()
    {
        return $this->personaContacto;
    }

    /**
     * @param mixed $personaContacto
     */
    public function setPersonaContacto($personaContacto)
    {
        $this->personaContacto = $personaContacto;
    }

    /**
     * @return mixed
     */
    public function getAnnoFundacion()
    {
        return $this->annoFundacion;
    }

    /**
     * @param mixed $annoFundacion
     */
    public function setAnnoFundacion($annoFundacion)
    {
        $this->annoFundacion = $annoFundacion;
    }

    /**
     * @return mixed
     */
    public function getDisponibleRestaurante()
    {
        return $this->disponibleRestaurante;
    }

    /**
     * @param mixed $disponibleRestaurante
     */
    public function setDisponibleRestaurante($disponibleRestaurante)
    {
        $this->disponibleRestaurante = $disponibleRestaurante;
    }

    /**
     * @return mixed
     */
    public function getDisponibleHotel()
    {
        return $this->disponibleHotel;
    }

    /**
     * @param mixed $disponibleHotel
     */
    public function setDisponibleHotel($disponibleHotel)
    {
        $this->disponibleHotel = $disponibleHotel;
    }

    /**
     * @return mixed
     */
    public function getVinos()
    {
        return $this->vinos;
    }

    /**
     * @param mixed $vinos
     */
    public function setVinos($vinos)
    {
        $this->vinos = $vinos;
    }

    public function insert(){

        $insert = $this->conexion->prepare("INSERT INTO bodegas(nombre,direccion,email,telefono,personaContacto,annoFundacion,disponibleRestaurante,disponibleHotel)
                                            VALUES(:nombre,:direccion,:email,:telefono,:personaContacto,:annoFundacion,:disponibleRestaurante,:disponibleHotel)");

        $insert->execute(array(
            ":nombre" => $this->nombre,
            ":direccion" => $this->direccion,
            ":email" => $this->email,
            ":telefono" => $this->telefono,
            ":personaContacto" => $this->personaContacto,
            ":annoFundacion" => $this->annoFundacion,
            ":disponibleRestaurante" => $this->disponibleRestaurante,
            ":disponibleHotel" => $this->disponibleHotel
        ));

        $this->conexion = null;
    }

    public function getAll(){

        $select = $this->conexion->prepare("SELECT id,nombre,direccion,email,telefono,personaContacto,annoFundacion,disponibleRestaurante,disponibleHotel FROM ".$this->table);
        $select->execute();
        $result = $select->fetchAll();
        $this->conexion = null;

        return $result;
    }

    public function del(){

        $delete = $this->conexion->prepare("DELETE FROM bodegas WHERE id = ? ");
        $delete->bindPAram(1, $this->id);
        $delete->execute();

        $this->conexion = null;
    }

    public function detalles(){

        $select = $this->conexion->prepare("SELECT id,nombre,direccion,email,telefono,personaContacto,annoFundacion,disponibleRestaurante,disponibleHotel FROM bodegas WHERE id = ? ");
        $select->BindPAram(1, $this->id);
        $select->execute();
        $result = $select->fetchAll();

        $this->conexion = null;
        return $result;
    }

    public function update($idBodega){

        $update = $this->conexion->prepare("UPDATE bodegas SET nombre=:nombre,direccion=:direccion,email=:email,telefono=:telefono,personaContacto=:personaContacto,annoFundacion=:annoFundacion,disponibleRestaurante=:disponibleRestaurante,disponibleHotel=:disponibleHotel WHERE id = :id ");

        $update->execute(array(
            ":id" => $idBodega,
            ":nombre" => $this->nombre,
            ":direccion" => $this->direccion,
            ":email" => $this->email,
            ":telefono" => $this->telefono,
            ":personaContacto" => $this->personaContacto,
            ":annoFundacion" => $this->annoFundacion,
            ":disponibleRestaurante" => $this->disponibleRestaurante,
            ":disponibleHotel" => $this->disponibleHotel
        ));

        $this->conexion = null;
    }

}