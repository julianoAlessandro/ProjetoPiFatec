<?php
class Horario{
    public $id_curso;
    public $id_disciplina;
    public $curso;
    public $disciplina;
    public $nºedital;
    public $cargaH;
    public $horario;
    public $prazos;
    public $semestre;
    public  $id_aula;
    public  $cargaHoraria;
    

 

    public function  __construct($id_horario = false)
	{
        if($id_horario){
            $this->id_horario= $id_horario;
            $this ->carregar();

        }

       
     $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
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
                 
            $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');     
            $conexao->exec($sqlEdital);              
           echo "Registro gravado com sucesso!";
        
           



    }

    public function listar()
	{
         $sqlHorario = "SELECT * FROM horarioaula";
         $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
         $resultado = $conexao->query( $sqlHorario);
         $listaHorario = $resultado->fetchAll();
          return  $listaHorario;
	}

    public function excluir()
	{
        $sqlHorario = "DELETE FROM horarioaula WHERE id_horario=".$this->id_horario;
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
        $conexao->exec($sqlHorario);
	}

    
    public function carregar()
    {
        $sqlHorario = "SELECT * FROM horarioaula WHERE id_horario=" . $this->id_horario;
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
        $resultado = $conexao->query($sqlHorario);
         $linha = $resultado->fetch();
        $this->id_horario = $linha['id_horario'];
        $this->horario = $linha['horario'];
 
    }
    public function atualizar()
    {
          $sqlHorario = "UPDATE horarioaula SET 
                    horario = '$this->horario'                                
                      WHERE id_horario = $this->id_horario ";

        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
        $conexao->exec($sqlHorario);
    }

}