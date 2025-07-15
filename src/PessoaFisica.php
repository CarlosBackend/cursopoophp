<?php

declare(strict_types=1); // strict declara que o PHP deve tratar os tipos de dados estritamente

namespace Henri\CursoPooPhp;
class PessoFisica {
    private string $nome;
    private string $cpf;
    private string $phone;
    private int $age;

    public function __construct(string $nome = '', string $cpf = '', string $phone = '', int $age = 0) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->phone = $phone;
        $this->age = $age;
    }
    public function getNome(): string {
        return $this->nome;
    }
    public function setNome(string $nome): void {
        $this->nome = $nome;
    }
    public function getCpf(): string {
        return $this->cpf;
    }
    public function setCpf(string $cpf): void {
        $this->cpf = $cpf;
    }
    public function getPhone(): string {
        return $this->phone;
    }
    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }
    public function getAge(): int {
        return $this->age;
    }
    public function setAge(int $age): void {
        $this->age = $age;
    }
}

