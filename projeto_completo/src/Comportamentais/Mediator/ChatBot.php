<?php

namespace DesignPatterns\Comportamentais\Mediator;

class ChatBot extends Usuario
{
    private Usuario $ultimoUsuario;

    public function __construct()
    {
        parent::__construct('CHATBOT');
        $this->ultimoUsuario = $this;
    }

    public function enviar(string $mensagem): void
    {
        echo '## ' . $this->getNome() . ' <strong>enviou: </strong>: ' . $mensagem . ' ##<br>';
        echo '----<br>';
        $this->mediator->enviarMensagem($mensagem, $this);
    }

    public function receber(string $mensagem): void
    {
        echo $this->getNome() . ' <strong>recebeu: </strong>: ' . $mensagem . '<br>';
    }

    public function validarMensagem(Usuario $usuario): bool
    {
        if ($this->ultimoUsuario === $usuario) {
            $this->enviar('Uma mensagem de ' . $usuario->getNome() . ' foi negada!');
            return false;
        }

        $this->ultimoUsuario = $usuario;
        return true;
    }
}