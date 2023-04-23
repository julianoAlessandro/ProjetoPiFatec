<?php
class Cadastrar{
    public $nºedital;
    public $curso;
    public $disciplina;
    public $cargaH;
    public $horario;

    public function inserir(){
        $sql = "INSERT INTO tb_cadastro (nºedital,curso,disciplina,cargaH,horario) VALUES(
        '".$this->nºedital."',
        '".$this->curso."' ,
        '".$this->disciplina."' ,
        '".$this->cargaH."' ,
        '".$this->horario."' 
       
        )";

        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=cadastro_edital','root','');
        //executa a string  SQL na conexao, inserindo os dados
        $conexao->exec($sql);
       echo "Registro gravado com sucesso!";
       



    }

    public function listar(){
        $sql = "SELECT * FROM tb_cadastro";
        $conexao = new PDO('mysql:host=127.0.0.1:3307;dbname=cadastro_edital','root','');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchALL();
        //retorna o array contendo todos os registros da tabela "tb_turmas"
        return $lista;
       

    }


}




?>