<?php
class Disciplina
{
    public $id_disciplina;
    public $disciplina;
     public function __construct($id_disciplina = false)
	{
     		if ($id_disciplina){
                $this->id = $id_disciplina;                
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
}



?>