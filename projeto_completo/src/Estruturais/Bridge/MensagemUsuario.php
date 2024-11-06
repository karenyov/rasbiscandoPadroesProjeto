<?php

namespace DesignPatterns\Estruturais\Bridge;

class MensagemUsuario extends Mensagem
{
    public function enviar()
    {
        echo 'Mensagem enviada por um USUÁRIO<br>';
        $this->canal->enviarMensagem($this->assunto, $this->mensagem);
    }
}