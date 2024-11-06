<?php

namespace DesignPatterns\Comportamentais\Command;

use DesignPatterns\Comportamentais\Command\Fabricante\ArCondicionado;

class MudarTemperaturaArCondicionado implements Command
{
    private ArCondicionado $arCondicionado;
    private int $temperatura;
    private int $temperaturaAnterior;

    public function __construct(ArCondicionado $arCondicionado)
    {
        $this->arCondicionado = $arCondicionado;
        $this->temperatura = $arCondicionado->getTemperatura();
        $this->temperaturaAnterior = $arCondicionado->getTemperatura();
    }

    public function setTemperatura(int $temperatura): void
    {
        $this->temperaturaAnterior = $this->temperatura;
        $this->temperatura = $temperatura;
    }

    public function executar(): void
    {
        $this->arCondicionado->setTemperatura($this->temperatura);
        $this->arCondicionado->imprimeObjeto();
    }

    public function desfazer(): void
    {
        $this->arCondicionado->setTemperatura($this->temperaturaAnterior);
        $this->arCondicionado->imprimeObjeto();
    }
}