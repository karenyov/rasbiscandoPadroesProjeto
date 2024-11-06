<?php

namespace DesignPatterns\Comportamentais\Mediator;

class SalaDeChatMediator implements SalaDeChatMediatorInterface
{
    private array $usuarios;

    private ChatBot $chatBot;

    private string $nome;

    public function __construct(ChatBot $chaBot, string $nome)
    {
        $this->usuarios = [];
        $this->chatBot = $chaBot;
        $this->chatBot->setMediator($this);
        $this->nome = $nome;
    }

    public function enviarMensagem(string $mensagem, Usuario $usuario): void
    {
        if ($this->chatBot->validarMensagem($usuario)) {
            foreach ($this->usuarios as $u) {
                if ($u != $usuario) {
                    $u->receber($mensagem);
                }
            }
            echo "---------------------------------<br>"; //Indica o fim dos envios
        }
    }

    public function adicionarUsuario(Usuario $usuario): void
    {
        $this->usuarios[] = $usuario;
    }

    public function removerUsuario(Usuario $usuario): void
    {
        foreach ($this->usuarios as $key => $u) {
            if ($u === $usuario) {
                unset($this->usuarios[$key]);
            }
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}