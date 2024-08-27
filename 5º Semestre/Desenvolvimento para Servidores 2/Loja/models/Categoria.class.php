<?php

class Categoria 
{
    private $conexao;
    private $idcategoria;
    private $descritivo;
    private $status;

    public function __construct($conexao, $idcategoria = 0, $descritivo = "", $status = "") 
    {
        $this->conexao = $conexao;
        $this->idcategoria = $idcategoria;
        $this->descritivo = $descritivo;
        $this->status = $status;
    }

    // Getters
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    public function getDescritivo()
    {
        return $this->descritivo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    // Setters
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;
    }

    public function setDescritivo($descritivo)
    {
        $this->descritivo = $descritivo;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    // Operações de banco de dados
    public function listarCategorias()
    {
        $sql = "SELECT * FROM categorias";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function criarCategoria($descritivo, $status)
    {
        $sql = "INSERT INTO categorias (descritivo, status) VALUES (:descritivo, :status)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':descritivo', $descritivo);
        $stmt->bindParam(':status', $status);
        return $stmt->execute();
    }

    public function atualizarCategoria($idcategoria, $descritivo, $status)
    {
        $sql = "UPDATE categorias
