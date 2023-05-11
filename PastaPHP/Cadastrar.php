<?php
class Cadastrar{
    public $nºedital;
    public $curso;
    public $disciplina;
    public $cargaH;
    public $horario;

    public function inserir(){
            // Comando INSERT para a tabela "cursos"
            $sqlCursos = "INSERT INTO cursos (Nome_Curso) VALUES (
                '".$this->curso."'
            )";
        
            // Comando INSERT para a tabela "disciplinas"
            $sqlDisciplinas = "INSERT INTO disciplinas (Nome_Disciplina) VALUES (
                '".$this->disciplina."'
            )";
        
            // Comando INSERT para a tabela "edital"
            $sqlEdital = "INSERT INTO edital (N_edital) VALUES (
                '".$this->nºedital."'
            )";
        
            // Comando INSERT para a tabela "curso_disciplina"
            $sqlCursoDisciplina = "INSERT INTO curso_disciplina (Horário, Carga_horario) VALUES (
                '".$this->horario."',
                '".$this->cargaH."' 
            )";
        
            // Conexão com o banco de dados
            $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
        
            // Execução dos comandos INSERT na ordem desejada
            $conexao->exec($sqlEdital);
            $conexao->exec($sqlCursos);
            $conexao->exec($sqlDisciplinas);
            $conexao->exec($sqlCursoDisciplina);
        
            echo "Registro gravado com sucesso!";
        
        
       



    }

    public function listar(){
        $sql = "SELECT * FROM tb_cadastro";
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=banco_editais','root','');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchALL();
        //retorna o array contendo todos os registros da tabela "tb_turmas"
        return $lista;
       

    }


}




?>
