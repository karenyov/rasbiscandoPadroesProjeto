<?php

namespace DesignPatterns\Comportamentais\Iterator;

class ImpressoraDeAgregado
{
    public static function iterar(Agregado $agregado)
    {
        $iterator = $agregado->createIterator();
        while ($iterator->hasNext()) {
            echo $iterator->next() . " ";
        }
    }
}