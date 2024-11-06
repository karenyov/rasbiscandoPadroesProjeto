<?php

namespace DesignPatterns\Comportamentais\Command;

use DesignPatterns\Comportamentais\Command\Fabricante\ArCondicionado;

class DesligarArCondicionado implements Command
{
    private ArCondicionado $arCondicionado;

    public function __construct(ArCondicionado $arCondicionado)
    {
        $this->arCondicionado = $arCondicionado;
    }

    public function executar(): void
    {
        $this->arCondicionado->desligar();
        $this->arCondicionado->imprimeObjeto();
    }

    public function desfazer(): void
    {
        $this->arCondicionado->ligar();
        $this->arCondicionado->imprimeObjeto();
    }
}