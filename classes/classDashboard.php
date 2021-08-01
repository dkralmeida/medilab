<?php
	
class classDashboard
	{
public static function carregarPagina(){
			if(isset($_GET['url'])){
				$url = explode('/',$_GET['url']);
				if(file_exists('pages/'.$url[0].'.php')){
					include('pages/'.$url[0].'.php');
				}else{
					//Página não existe!
					header('Location: '.INCLUDE_PATH);
				}
			}else{
				
				include('pages/home.php');
			}
		}

	}
?>