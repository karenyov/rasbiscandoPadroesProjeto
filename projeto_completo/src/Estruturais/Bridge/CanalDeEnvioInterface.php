<?php

namespace DesignPatterns\Estruturais\Bridge;

interface CanalDeEnvioInterface
{
    public function enviarMensagem(string $assunto, string $mensagem): void;
}