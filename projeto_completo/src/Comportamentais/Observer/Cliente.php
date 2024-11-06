<?php

namespace DesignPatterns\Comportamentais\Observer;

class Cliente implements Observer
{
    private string $nome;
    private string $email;
    private Subject $subject;

    /*O subject é recebido por parâmetro para que o cliente o conheça. Se no futuro um cliente
      quiser se desinscrever da newsletter ele pode pedir para o Subject o remover da lista.*/
    public function __construct(string $nome, string $email, Subject $subject)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }

    public function update(string $mensagem): void  //Faz o envio da mensagem para o email do cliente.
    {
        Email::enviarEmail($this,$mensagem);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}