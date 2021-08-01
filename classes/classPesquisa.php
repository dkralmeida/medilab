<?php
include("ClassConexao.php");

class ClassPesquisa extends ClassConexao{   
    
    public function pesquisaDb($data, $modalidade, $filtrogeral, $busca)
    {   
        $filtrogeral    =   $filtrogeral;
        $data           =   $data; 
        $modalidade     =   $modalidade; 
        $filtrogeral    =   $filtrogeral; 
        $buscaLike      =   '%'.$busca.'%'; //pega valores aproximados

        //busca por data
        if($data != '' && $modalidade == '0' ){ 
            $crud = $this->conectaDB()->prepare("SELECT * FROM tb_pacientes WHERE data = '$data' ");}

        //busca por modalidade
        else if($data == '' && $modalidade != '0' ){ 
            $crud = $this->conectaDB()->prepare("SELECT * FROM tb_pacientes WHERE modalidade = '$modalidade' ");}

        //busca por data e modalidade
        else if($data != '' && $modalidade != '0' ){ 
            $crud = $this->conectaDB()->prepare("SELECT * FROM tb_pacientes WHERE data = '$data' AND modalidade = '$modalidade' ");}


        else if($filtrogeral == '1'){
            $modalidade = '0';
            $data = '';
            $crud =   $this->conectaDB()->prepare("SELECT * FROM tb_pacientes" );
       }
        //busca tudo            
        else{
            $crud =   $this->conectaDB()->prepare("SELECT * FROM tb_pacientes WHERE nome like :nome");         
        }


        $crud       ->  bindValue(':nome',$buscaLike);//bindValue - pode ser referência ou um valor direto
        $crud       ->  execute();
        return $f   =   $crud->fetchAll();
    }   
    

}

