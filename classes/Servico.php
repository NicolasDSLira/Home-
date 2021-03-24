<?php
// session_start();

include_once "Conexao.php";

class selecionar{
    private $nomeServico;
    private $codServico;

    public function getCodServico()
    {
        return $this->CodServico;
    }

    public function getnomeServico()
    {
        return $this->nomeServico;
    }

    // Setters

    public function setcodServico($cod)
    {
        $this->codPrestador = $cod;
    }

    public function setnomePrestador($nome)
    {
        $this->nomePrestador = $nome;
    }

    public function exibir($selecionar)
    {
        $conexao = Conexao::pegarConexao();

        $stmt = $conexao->prepare("SELECT * FROM `tbServicos`;");

        $sql = $stmt;

        $stmt->execute();

        return $stmt;
    }
}

class servicoPrestado{

    private $codPrestador;
    private $codServico;
    private $valorMinimo;

    public function getcodPrestador()
    {
        return $this->codPrestador;
    }
    public function getcodServico()
    {
        return $this->codServico;
    }
    public function getvalorMinimo()
    {
        return $this->valorMinimo;
    }

    // Setters

    public function setcodPrestador($codP)
    {
        $this->codPrestador = $codP;
    }
    public function setcodServico($codS)
    {
        $this->codServico = $codS;
    }
    public function setvalorMinimo($vm)
    {
        $this->valorMinimo = $vm;
    }

    public function cadastrarServico($servico)
    {
        $conexao = Conexao::pegarConexao();

        $stmt = null;

        $codServico = $servico->getcodServico();
        $codP = $servico->getcodPrestador();
        $vm = $servico->getvalorMinimo();

        $stmt = $conexao->prepare("INSERT INTO `tbservicoprestado` (`codServico`, `codPrestador`, `valorMinimo`) VALUES ('$codServico','$codP','$vm');");


        $stmt->execute();

        $re = $stmt;

        return 'Serviço adicionado';
    }
}


class add{

    private $nomeS;
    private $descS;


    public function getnomeAdd(){
        return $this->nomeAdd;
    }

    public function getdescAdd(){
        return $this->descAdd;
    }

    //seters

    public function setnomeAdd($nome){
        $this->nomeAdd = $nome;
    }

    public function setdescAdd($desc){
        $this->descAdd = $desc;
    }

    public function addServico($add){

        $conexao = Conexao::pegarConexao();

        $nome = $add->getnomeAdd();
        $desc = $add->getdescAdd();

            $stmt = $conexao->prepare("INSERT INTO `tbServicos` (`nomeServico`, `descServico`) VALUES ('$nome','$desc');");    

            $stmt->execute();

            $P = $stmt; 

            $stmt = null; 

            return $P;
            
    }


}