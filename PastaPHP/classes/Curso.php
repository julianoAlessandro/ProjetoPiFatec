<?php
class Curso
{
    public $id_curso;
    public $Nome_Curso;
    public $sigla_curso;

   
    public function __construct($id_curso = false)
	{
       
		if ($id_curso){
               $this->id = $id_curso;                
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
}