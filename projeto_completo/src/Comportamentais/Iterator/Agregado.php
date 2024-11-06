<?php

namespace DesignPatterns\Comportamentais\Iterator;

interface Agregado
{
    public function createIterator(): Iterator;
}