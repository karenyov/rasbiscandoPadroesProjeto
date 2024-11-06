<?php

namespace DesignPatterns\Comportamentais\Command;

interface Command
{
    public function executar(): void;

    public function desfazer(): void;
}