<?php

namespace Alura\Banco\Modelo;

use DomainException;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            throw new DomainException("Nome precisa ter pelo menos 5 caracteres");
        }
    }
}
