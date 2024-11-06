<?php

namespace DesignPatterns\Comportamentais\State;

interface State
{
    public function sucessoAoPagar(): void;

    public function despacharPedido(): void;

    public function cancelarPedido(): void;
}