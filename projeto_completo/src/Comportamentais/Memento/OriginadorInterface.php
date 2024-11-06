<?php

namespace DesignPatterns\Comportamentais\Memento;

interface OriginadorInterface
{
    public function salvar(): MementoInterface;

    public function imprimir(): void;
}