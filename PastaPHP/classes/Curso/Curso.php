<?php
class Curso
{
    public $id_curso;
    public $Nome_Curso;
    public $sigla_curso;

   
    public function __construct($id_curso = false)
	{
       
		if ($id_curso){
               $this->id_curso = $id_curso;                
               $this->carregar();
        }
	}


    public function listar()
	{
       
       $sqlCurso = "SELECT * FROM cursos";
       $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
       $resultado = $conexao->query($sqlCurso);
       $listaCurso = $resultado->fetchAll();
       return $listaCurso;
	}
    public function excluir()
	{
        $sqlCurso = "DELETE FROM cursos WHERE id_curso=".$this->id_curso;
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
        $conexao->exec($sqlCurso);
	}

    
    public function carregar()
    {
        $sqlCurso = "SELECT * FROM cursos WHERE id_curso=" . $this->id_curso;
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
        $resultado = $conexao->query($sqlCurso);
         $linha = $resultado->fetch();
        $this->id_curso = $linha['id_curso'];
        $this->Nome_Curso = $linha['Nome_Curso'];
        $this->sigla_curso = $linha['sigla_curso'];
    }

    public function atualizar()
    {
          $sqlCurso = "UPDATE cursos SET 
                    Nome_Curso= '$this->Nome_Curso'                                
                      WHERE id_curso = $this->id_curso";

        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
        $conexao->exec($sqlCurso);
    }
}