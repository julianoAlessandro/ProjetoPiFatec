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
    public $arquivo;
    public  $arquivoEdital;
 

    public function  __construct($id_disciplina = false)
	{
        if($id_disciplina){
            $this->id_disciplina = $id_disciplina;
            $this ->carregar();

        }

        
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
        $this->conexao = $conexao;
    }
    // material  arquivo Edital
  

    public function inserir(){
           
        $arquivo = $_FILES['arquivo'];
        if (isset($arquivo) && !empty($arquivo))
         {
            move_uploaded_file($arquivo['tmp_name'], "Editais/" . $arquivo['name']);
            echo "Upload realizado com sucesso";
        
            $arquivoEdital = "Editais/" . $arquivo['name'];
            $this->arquivoEdital = $arquivoEdital;
        } else {
            $arquivoEdital = "NULL";
        }
         
           
            // Comando INSERT para a tabela "edital"
            $sqlEdital = "INSERT INTO edital (N_edital,id_disciplina,id_curso,id_aula,id_semestre,id_prazo,id_horario,arquivosEdital) VALUES (
                '".$this->nºedital."',
                  '".$this->id_disciplina."',
                 '".$this->id_curso."',
                 '".$this->id_aula."',
                 '".$this->id_semestre."',
                 '".$this->id_prazo."',
                 '".$this->id_horario."',
                 '".$this->arquivoEdital."'
                    
        
            )";
                 
            $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');     
            $conexao->exec($sqlEdital);              
           echo "Registro gravado com sucesso!<br>";
        
           



    }

    public function listar()
	{
        if(!empty($_GET['search']))
        {
        $data = $_GET['search'];
        $sqlEdital = "SELECT e.N_edital, c.Nome_Curso, s.semestre, c.sigla_curso, d.Nome_Disciplina, ca.cargaHoraria, h.horario, p.prazo,e.arquivosEdital
                      FROM edital e
                      LEFT JOIN disciplinas d ON e.id_disciplina = d.id_disciplina
                      LEFT JOIN cursos c ON e.id_curso = c.id_curso
                      LEFT JOIN cargaaula ca ON e.id_aula = ca.id_aula
                      LEFT JOIN prazos p ON e.id_prazo = p.id_prazo
                      LEFT JOIN semestre s ON e.id_semestre = s.id_semestre
                      LEFT JOIN horarioaula h ON e.id_horario = h.id_horario
                      WHERE c.Nome_Curso LIKE '%$data%' OR s.semestre LIKE '%$data%' OR c.sigla_curso LIKE '%$data%' OR d.Nome_Disciplina LIKE '%$data%'
                      OR ca.cargaHoraria LIKE '%$data%' OR h.horario LIKE '%$data%' OR p.prazo LIKE '%$data%'  OR e.N_edital LIKE '%$data%'
                      ORDER BY e.N_edital";
                 
             
        
        
        }
        else
        {
      
            $sqlEdital = "SELECT e.N_edital,c.Nome_Curso,s.semestre,c.sigla_curso,d.Nome_Disciplina,ca.cargaHoraria,h.horario,p.prazo, e.arquivosEdital
                        FROM edital  e
                        LEFT JOIN disciplinas d
                        ON e.id_disciplina = d.id_disciplina
                        LEFT JOIN cursos c
                        ON e.id_curso = c.id_curso
                        LEFT JOIN cargaaula ca
                        ON e.id_aula = ca.id_aula
                        LEFT JOIN prazos p
                        ON e.id_prazo = p.id_prazo
                        LEFT JOIN semestre s
                        ON e.id_semestre = s.id_semestre
                        LEFT JOIN horarioaula h
                        ON e.id_horario = h.id_horario
                        ORDER BY N_edital
                        ";
                
        }
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