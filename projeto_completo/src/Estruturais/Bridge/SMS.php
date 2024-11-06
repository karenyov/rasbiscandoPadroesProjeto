<?php

namespace DesignPatterns\Estruturais\Bridge;

class SMS implements CanalDeEnvioInterface
{
    public function enviarMensagem(string $assunto, string $mensagem): void
    {
        echo "=== Mensagem Enviada por SMS ===<br>";
        echo 'ASSUNTO: ' . $assunto . '<br>';
        echo "-----------------<br>";
        echo 'MENSAGEM: ' . $mensagem . '<br><br>';
    }
}