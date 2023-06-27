<<?php 

class Status{
	public $id_curso;
    public $id_disciplina;
    public $curso;
    public $disciplina;
    public $nºedital;
    public $cargaH;
    public $horario;
    public $prazos;
    public $semestre;
    public $id_aula;
    public $cargaHoraria;
    

 

    public function  __construct($id = false)
	{
        if($id){
            $this->id = $id;
            $this ->carregar();

        }
  
     $conexao = new PDO('mysql:host=127.0.0.1;dbname=banco_editais','root','');
     $this->conexao = $conexao;
    }

    public function inserir(){
           
            // Comando INSERT para a tabela "edital"
            $sqlEdital = "INSERT INTO edital (N_edital,id_disciplina,id_curso,id_disciplina_curso) VALUES (
                '".$this->nºedital."',
                  '".$this->id_disciplina."',
                 '".$this->id_curso."',
                '".$this->id_disciplina_curso."'              
        
            )";
                 
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=banco_editais','root','');     
            $conexao->exec($sqlEdital);              
           echo "Registro gravado com sucesso!";

    }

    public function listar()
	{
         $sqlStatus = "SELECT * FROM status";
         $conexao = new PDO('mysql:host=127.0.0.1;dbname=banco_editais','root','');
         $resultado = $conexao->query( $sqlStatus);
         $listaStatus = $resultado->fetchAll();
          return  $listaStatus;
	}

    public function excluir()
	{
        $sqlStatus = "DELETE FROM status WHERE id_status=".$this->id_status;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=banco_editais','root','');
        $conexao->exec($sqlStatus);
	}

    
    public function carregar()
    {
        $sqlStatus = "SELECT * FROM status WHERE id_status=" . $this->id_status;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=banco_editais','root','');
        $resultado = $conexao->query($sqlStatus);
         $linha = $resultado->fetch();
        $this->id_status = $linha['id_status'];
        $this->status = $linha['status'];
 
    }
    public function atualizar()
    {
          $sqlStatus = "UPDATE status SET 
                    status = '$this->status'                                
                      WHERE id_horario = $this->id_horario ";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=banco_editais','root','');
        $conexao->exec($sqlStatus);
    }
}


?>