<?php
class Edital{
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
            $sqlEdital = "INSERT INTO edital (N_edital,id_disciplina,id_curso,id_aula,id_semestre,id_prazo,id_horario) VALUES (
                '".$this->nºedital."',
                  '".$this->id_disciplina."',
                 '".$this->id_curso."',
                 '".$this->id_aula."',
                 '".$this->id_semestre."',
                 '".$this->id_prazo."',
                 '".$this->id_horario."'
                    
        
            )";
                 
            $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');     
            $conexao->exec($sqlEdital);              
           echo "Registro gravado com sucesso!";
        
           



    }

    public function listar()
	{
       $sqlEdital = "SELECT e.N_edital,c.Nome_Curso,s.semestre,c.sigla_curso,d.Nome_Disciplina,ca.cargaHoraria,h.horario,p.prazo
        FROM edital  e
        INNER JOIN disciplinas d
        ON e.id_disciplina = d.id_disciplina
        INNER JOIN cursos c
        ON e.id_curso = c.id_curso
        INNER JOIN cargaaula ca
        ON e.id_aula = ca.id_aula
        INNER JOIN prazos p
        ON e.id_prazo = p.id_prazo
        INNER JOIN semestre s
        ON e.id_semestre = s.id_semestre
        INNER JOIN horarioaula h
        ON e.id_horario = h.id_horario
        ORDER BY N_edital
        ";
        
        
         $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
         $resultado = $conexao->query($sqlEdital);
         $listarEdital = $resultado->fetchAll();
          return $listarEdital;
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