<?php

namespace DesignPatterns\Comportamentais\Command;

class Aplicativo
{
    private array $comandos = [];

    public function setComando(Command $comando): int
    {
        $this->comandos[] = $comando;

        return count($this->comandos) - 1;
    }

    public function aoPrecionarBotao(int $id): void
    {
        $this->comandos[$id]->executar();
    }

    public function duploCliqueBotao(int $id): void
    {
        $this->comandos[$id]->desfazer();
    }

    public function getComando(int $id): Command
    {
        return $this->comandos[$id];
    }
}