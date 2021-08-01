<?php
include "../classes/ClassPesquisa.php";
$data			=   filter_input(INPUT_POST, 'data');
$modalidade		=   filter_input(INPUT_POST, 'modalidade');
$filtrogeral	=   filter_input(INPUT_POST, 'filtrogeral');
$busca 			= 	filter_input(INPUT_POST,'busca',FILTER_SANITIZE_SPECIAL_CHARS); /*input name="busca"  pages/pacientes.php*/
$pesquisa 		= 	new ClassPesquisa();
$retorno 		= 	$pesquisa->pesquisaDb($data, $modalidade, $filtrogeral, $busca);
echo json_encode($retorno);