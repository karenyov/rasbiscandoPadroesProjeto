<?php

namespace DesignPatterns\Criacionais\Prototype;

class GerenciadorDePrototipos
{
    private array $prototipos;

    public function __construct()
    {
        $livro = new Livro();
        $livro->setNome('Desconhecido');
        $livro->setAutor('Desconhecido');
        $livro->setNumeroPaginas(0);

        $this->prototipos['livro'] = $livro;

        $revista = new Revista();
        $revista->setNome('Desconhecido');
        $revista->setEdicao(0);

        $this->prototipos['revista'] = $revista;

        $trabalho = new Trabalho();
        $trabalho->setNome('Desconhecido');
        $trabalho->setAutor('Desconhecido');
        $trabalho->setTipo('Desconhecido');

        $this->prototipos['trabalho'] = $trabalho;
    }

    public function getInstance(string $identificador): Prototype
    {
        return $this->prototipos[$identificador];
    }
}