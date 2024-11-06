<?php

namespace DesignPatterns\Estruturais\Proxy;

class PessoaFisicaReceitaFederalProxy implements ReceitaFederalInterface
{
    private string $cpf;
    private ?ReceitaFederalInterface $pessoaFisicaRF = null;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    private function criarPessoaFisicaReceitaFederal(): void
    {
        if (is_null($this->pessoaFisicaRF)) {
            $this->pessoaFisicaRF = new PessoaFisicaReceitaFederal($this->cpf);
        }
    }

    public function getNome(): string
    {
        $this->criarPessoaFisicaReceitaFederal();
        return $this->pessoaFisicaRF->getNome();
    }

    public function getIdade(): int
    {
        $this->criarPessoaFisicaReceitaFederal();
        return $this->pessoaFisicaRF->getIdade();
    }

    public function CPFAtivo(): bool
    {
        $this->criarPessoaFisicaReceitaFederal();
        return $this->pessoaFisicaRF->CPFAtivo();
    }
}