<?php

class Empleado{
    private $table = "empleados";
    private $conexion;

    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $telefono;

    public function __construct($conexion) {
        $this->conexion = $conexion;
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
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
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

    public function save(){

        $consulta = $this->conexion->prepare("INSERT INTO empleados (nombre,apellidos,email,telefono)
                                        VALUES (:nombre,:apellidos,:email,:telefono)");
        $consulta->execute(array(
            "nombre" => $this->nombre,
            "apellidos" => $this->apellidos,
            "email" => $this->email,
            "telefono" => $this->telefono
        ));
        $this->conexion = null;

    }

    public function getAll(){

        $consulta = $this->conexion->prepare("SELECT id,nombre,apellidos,email,telefono FROM " . $this->table);
        $consulta->execute();
        $resultados = $consulta->fetchAll();
        $this->conexion = null;
        return $resultados;

    }

    public function del(){

        $delete = $this->conexion->prepare("DELETE FROM empleados WHERE id = ? ");
        $delete->bindPAram(1, $this->id);
        $delete->execute();
        $this->conexion = null;
    }

    public function getDetalles(){

        $consulta = $this->conexion->prepare("SELECT * FROM empleados WHERE id = ? ");
        $consulta->bindPAram(1, $this->id);
        $consulta->execute();
        $resultados = $consulta->fetchAll();
        $this->conexion = null;
        return $resultados;

    }

    public function update(){

        $update = $this->conexion->prepare("UPDATE empleados SET nombre=:nombre,apellidos=:apellidos,email=:email,telefono=:telefono WHERE id = :id ");

        $update->execute(array(
            "id" => $this->id,
            "nombre" => $this->nombre,
            "apellidos" => $this->apellidos,
            "email" => $this->email,
            "telefono" => $this->telefono
        ));
        $this->conexion = null;
    }

}