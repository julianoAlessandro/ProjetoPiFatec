<?php
class Disciplina
{
    public $id_disciplina;
    public $disciplina;
     public function __construct($id_disciplina = false)
	{
     		if ($id_disciplina){
                $this->id_disciplina = $id_disciplina;                
                $this->carregar();
        }
	}


    public function listar()
	{
         $sqlDisciplina = "SELECT * FROM disciplinas";
         $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
         $resultado = $conexao->query($sqlDisciplina);
         $listaDisciplina = $resultado->fetchAll();
          return $listaDisciplina;
	}
    public function excluir()
	{
        $sqlDisciplina = "DELETE FROM disciplinas WHERE id_disciplina=".$this->id_disciplina;
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
        $conexao->exec($sqlDisciplina);
	}

    
    public function carregar()
    {
        $sqlDisciplina = "SELECT * FROM disciplinas WHERE id_disciplina=" . $this->id_disciplina;
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
         $resultado = $conexao->query($sqlDisciplina);
         $linha = $resultado->fetch();
        $this->id_disciplina = $linha['id_disciplina'];
        $this->Nome_Disciplina = $linha['Nome_Disciplina'];
    }

    public function atualizar()
    {
          $sqlDisciplina = "UPDATE disciplinas SET 
                    Nome_Disciplina = '$this->Nome_Disciplina'                                
                      WHERE id_disciplina = $this->id_disciplina ";

        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
        $conexao->exec($sqlDisciplina);
    }
}



?>