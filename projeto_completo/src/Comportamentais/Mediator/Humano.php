<?php

namespace DesignPatterns\Comportamentais\Mediator;

class Humano extends Usuario
{
    public function enviar(string $mensagem): void
    {
        echo '<br>----------- ' . $this->mediator->getNome() . ' -----------<br>';
        echo $this->getNome() . ' <strong>enviou: </strong>: ' . $mensagem . '<br>';
        echo '----<br>';
        $this->mediator->enviarMensagem($mensagem, $this);
    }

    public function receber(string $mensagem): void
    {
        echo $this->getNome() . ' <strong>recebeu: </strong>: ' . $mensagem . '<br>';
    }
}