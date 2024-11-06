<?php

namespace DesignPatterns\Comportamentais\Memento;

class Historico
{
    private array $historico;

    public function criarCheckPoint(OriginadorInterface $originador): void
    {
        $this->historico[] = $originador->salvar();
    }

    public function desfazer(): void
    {
        if (!count($this->historico)) {
            return;
        }

        $memento = array_pop($this->historico);
        $memento->restaurar();
    }

    public function imprimir(OriginadorInterface $originador): void
    {
        $originador->imprimir();
    }
}