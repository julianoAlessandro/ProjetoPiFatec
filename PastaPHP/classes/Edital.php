<?php
class Edital{
    public $id_curso;
    public $id_disciplina;
    public $curso;
    public $disciplina;
    public $nºedital;
    public $cargaH;
    public $horario;

    public function  __construct($id_disciplina = false)
	{
        if($id_disciplina){
            $this->id_disciplina = $id;
            $this ->carregar();

        }

        include_once "classes/conexao.php";
        $this->conexao = $conexao;
    }

    public function inserir(){
           
            // Comando INSERT para a tabela "edital"
            $sqlEdital = "INSERT INTO edital (N_edital,id_disciplina,id_curso,Carga_Horaria,horario) VALUES (
                '".$this->nºedital."',
                  '".$this->id_disciplina."',
                 '".$this->id_curso."',
                '".$this->cargaH."',
                '".$this->horario."'
        
            )";
                 
            $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');     
            $conexao->exec($sqlEdital);              
           echo "Registro gravado com sucesso!";
        
           



    }

    public function listar(){
 
        $sqlEdital = "SELECT e.N_edital, c.Nome_Curso,c.sigla_curso
        FROM edital AS e
        INNER JOIN cursos c
        ON e.id_curso = c.id_curso";    
    
      
  
      
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
        $resultado = $this ->conexao->query($sqlEdital);
        $listaEdital = $resultado->fetchALL();
        return $listaEdital;

        

    }

    public function excluir(){
        $sql = "DELETE FROM disciplinas WHERE id_disciplina=".$this->id_disciplina;
        include_once "classes/conexao.php";        
        $conexao->exec($sql);
    }

    public function carregar()
    {
     
        $sql = "SELECT * FROM disciplinas WHERE id_disciplina=" . $this->id_disciplina;
        include_once "classes/conexao.php";        
      
        $resultado = $conexao->query($sql);
     
        $linha = $resultado->fetch();
        $this->descTurma = $linha['id_disciplina'];
        $this->ano = $linha['Nome_Disciplina'];
    }


}




?>