<?php

namespace DesignPatterns\Estruturais\Bridge;

class MensagemAdmin extends Mensagem
{
    public function enviar()
    {
        echo 'Mensagem enviada pelo ADMINISTRADOR<br>';
        $this->canal->enviarMensagem($this->assunto, $this->mensagem);
    }
}