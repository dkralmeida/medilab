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
       if($data != ''){ 
            $crud = $this->conectaDB()->prepare("SELECT * FROM tb_pacientes WHERE data = '$data' ");}

        //busca por modalidade
        else if($modalidade != '0' ){ 
            $crud = $this->conectaDB()->prepare("SELECT * FROM tb_pacientes WHERE modalidade = '$modalidade' ");}       

        else if($data != '' && $modalidade != '0' ){ 
            $crud = $this->conectaDB()->prepare("SELECT * FROM tb_pacientes WHERE data = '$data' AND modalidade = '$modalidade' ");           
        }
        //busca por filtro geral
        else if($filtrogeral != '1'){//todos            
            $crud =   $this->conectaDB()->prepare("SELECT * FROM tb_pacientes WHERE modalidade = '' AND modalidade = '0'");
        }
        //busca por nome
        else{            
            $crud =   $this->conectaDB()->prepare("SELECT * FROM tb_pacientes WHERE nome like :nome");         
       }


        $crud       ->  bindValue(':nome',$buscaLike);//bindValue - pode ser referência ou um valor direto
        $crud       ->  execute();
        return $f   =   $crud->fetchAll();
    }   
    

}

