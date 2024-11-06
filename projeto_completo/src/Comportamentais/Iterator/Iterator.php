<?php

namespace DesignPatterns\Comportamentais\Iterator;

interface Iterator
{
    public function hasNext(): bool;

    public function next();
}