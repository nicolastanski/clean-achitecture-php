<?php

namespace Alura\Arquitetura;

class Aluno
{
    private Cpf $cpf;
    private string $nome;
    private Email $email;
    /** @var Telefone */
    private array $telefones;

    public function __construct(Cpf $cpf, string $nome, Email $email)
    {
        $this->cpf = $cpf; 
        $this->nome = $nome;
        $this->email = $email;
    }
    
    public function comCpfEmailENome(string $numeroCpf, string $email, string $nome)
    {
        return new Aluno(new Cpf($numeroCpf), $nome, new Email($email));
    }

    public function adicionarTelefone(string $ddd, string $numero)
    {
        $this->telefones[] = new Telefone($ddd, $numero);
        return $this;
    }
}