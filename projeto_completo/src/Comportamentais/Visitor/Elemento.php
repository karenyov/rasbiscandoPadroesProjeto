<?php

namespace DesignPatterns\Comportamentais\Visitor;

interface Elemento
{
    public function aceitar(Visitor $visitor): float;
}