<?php //iniciando um projeto em php

class Pessoa{ //a classe pessoa armazenará os atributos que serão utilizados no objeto pessoa (instanciado no arquivo TestePessoa.php)
    //declaracao de variaveis
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    public function setNome($nome){ //o set é utilizado para definir valor para uma propriedade especifica
        $this->nome = $nome; //direcionando o objeto para a classe em questão
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getNome(){ //o get é usado quando a informação (n) for solicitada
        return $this->nome; 
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function getCep(){
        return $this->cep;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function getEstado(){
        return $this->estado;
    }

}

?>