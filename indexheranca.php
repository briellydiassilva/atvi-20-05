<?php

class Cliente {
    public string $logradouro; 
    public int $bairro; 

    public function cadastrar(string $logradouro, int $bairro): string {
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        return "Endereço: $logradouro, Bairro: $bairro\n";
    }
}

class ClientePessoaFisica extends Cliente {
    public string $nome;
    public int $cpf;

    public function cadastrar(string $nome, int $cpf): string {
        $this->nome = $nome;
        $this->cpf = $cpf;
        return "Nome: $nome, CPF: $cpf\n";
    }
}

class ClientePessoaJuridica extends Cliente {
    public string $nomeFantasia;
    public int $cnpj;

    public function registrar(string $nomeFantasia, int $cnpj): string {
        $this->nomeFantasia = $nomeFantasia;
        $this->cnpj = $cnpj;
        return "Nome Fantasia: $nomeFantasia, CNPJ: $cnpj\n";
    } 
}

$cliente = new Cliente();
$clienteFisico = new ClientePessoaFisica(); 
$clienteJuridico = new ClientePessoaJuridica();


$msg1 = $cliente->cadastrar("Guanambi", 123);
$msg2 = $clienteFisico->cadastrar("Maria Gatinha", 12345678900); 
$msg3 = $clienteJuridico->registrar("Flash", 12333444); 

echo $msg1;
echo $msg2;
echo $msg3;

?>

