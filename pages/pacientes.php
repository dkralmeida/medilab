
<h5>Pacientes</h5>
<p><i class="fa fa-info-circle"></i> Selecione o filtro desejado para carregar os dados:</p>




<div class="container">
   <form name="formPesquisa" id="formPesquisa" method="post" action="controller/controllerPacientes.php">
        
  
   <div class="row justify-content-start">

    <!--data-->
    <div class="col-2">
      <input class="form-control form-control-sm filtro" type="date" id="data" name="data"> 
    </div>

    <!--modalidade-->
    <div class="col-2">
 

    <select class="form-control form-control-sm filtro" id="modalidade" name="modalidade">
    <option value="0">Modalidade</option>
    <option value="1">RM</option>     
    <option value="2">XX</option>    
    </select>
    </div>

    <!--filtro geral-->
    <div class="col-2">
  
    <select class="form-control form-control-sm filtro" id="filtrogeral" name="filtrogeral">  
  
      <option value="0">Filtro geral</option> 
      <option value="1">Todos</option>      
      
    </select>
    </div>
    
  <!--pesquisar-->
  <div class="row pesquisar">
    <div class="col-sm">    
      
    <div class="div-inline">
      <input type="text" class="form-control form-control-sm espaco-abaixo filtro" id="busca" name="busca" placeholder=" Pesquisar">
    </div>
    <div class="div-inline"><button type="submit" class="btn btn-primary btn-sm btn-pesquisar"><i class="fas fa-search"></i></button></div>           
      
  </div><!--col-sm-->
  </div><!--row-->
  </form>
  </div><!--container-->



<!--listagem de pacientes-->
<div class="resultadoForm">


<table class="table table-hover">

    <thead>
    <tr>
      <th scope="col">ID Paciente</th>
      <th scope="col">Paciente</th>
      <th scope="col">Número</th>
      <th scope="col">Tipo de exame</th>
      <th scope="col">Modalidade</th>
      <th scope="col">Data</th>
      <th scope="col">Visualização</th>
    </tr>
  </thead>
    <tbody>  
      
    </tbody> <!--json-->
</table>
</div><!--resultadoForm-->



<!--btn voltar -->

<button type="button" class="btn btn-primary btn-sm btn-voltar">Voltar</button>

<!---paginação-->
<nav>
  <ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="page-link seta" href="#" ><i class="fas fa-chevron-left"></i></a>
    </li>
    <li class="page-item pagina">Página 1 de 3</li>
    
    <li class="page-item">
      <a class="page-link seta" href="#"><i class="fas fa-chevron-right"></i></a>
    </li>
  </ul>
</nav>