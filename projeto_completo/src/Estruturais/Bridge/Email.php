<?php

namespace DesignPatterns\Estruturais\Bridge;

class Email implements CanalDeEnvioInterface
{
    public function enviarMensagem(string $assunto, string $mensagem): void
    {
        echo "=== Mensagem Enviada por E-MAIL ===<br>";
        echo 'ASSUNTO: ' . $assunto . '<br>';
        echo "-----------------<br>";
        echo 'MENSAGEM: ' . $mensagem . '<br><br>';
    }
}