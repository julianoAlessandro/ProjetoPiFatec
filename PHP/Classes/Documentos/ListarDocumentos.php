 <?php
require_once "Classes/Database.php";


 class ListarDocumentos{
	 
 
 public function listar()
	{
      
        $sqlEdital = "select * from documentos";
                    
        $conexao = Database::conexao();
        $resultado = $conexao->query($sqlEdital); 
        $listarEdital = $resultado->fetchAll();              
        return $listarEdital;
	}
	
 }
?>	