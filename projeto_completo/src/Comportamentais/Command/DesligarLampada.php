<?php

namespace DesignPatterns\Comportamentais\Command;

use DesignPatterns\Comportamentais\Command\Fabricante\Lampada;

class DesligarLampada implements Command
{
    private Lampada $lampada;

    public function __construct(Lampada $lampada)
    {
        $this->lampada = $lampada;
    }

    public function executar(): void
    {
        $this->lampada->desligar();
        $this->lampada->imprimeObjeto();
    }

    public function desfazer(): void
    {
        $this->lampada->ligar();
        $this->lampada->imprimeObjeto();
    }
}