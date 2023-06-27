<?php
class CargaHoraria{
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
    

 

    public function  __construct($id_cargaAula = false)
	{
        if($id_cargaAula){
            $this->$id_cargaAula= $id_cargaAula;
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
         $sqlCargaAula = "SELECT * FROM cargaaula";
         $conexao = new PDO('mysql:host=127.0.0.1;dbname=banco_editais','root','');
         $resultado = $conexao->query( $sqlCargaAula);
         $listaCargaAula = $resultado->fetchAll();
          return  $listaCargaAula;
	}

}