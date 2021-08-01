<?php
include('../config.php');
abstract class ClassConexao{

    protected function conectaDB()
    {
        try{
            $con = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $con;
        }catch (PDOException $erro){
            return $erro->getMessage();
        }
    }
}