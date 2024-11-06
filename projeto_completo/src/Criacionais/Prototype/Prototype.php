<?php

namespace DesignPatterns\Criacionais\Prototype;

interface Prototype
{
    public function clone(): Prototype;

    public function __toString();
}