<?php

namespace DesignPatterns\Comportamentais\Observer;

class Newsletter implements Subject
{
    private array $observers;
    private array $mensagens;

    /*Adiciona um objeto a lista de observers a serem notificados
      quando uma nova mensagem for inserida na newsletter. */
    public function registerObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    /*Remove um objeto a lista de observers a serem notificados
      quando uma nova mensagem for inserida na newsletter. */
    public function removeObserver(Observer $observer): void
    {
        foreach ($this->observers as $key => $observerInArray) {
            if ($observerInArray === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    //Notifica todos os observer sobre a nova mensagem da newsletter.
    public function notifyObservers(): void
    {
        foreach ($this->observers as $o) {
            $o->update(end($this->mensagens));
        }
    }

    /*Adiciona uma nova mensagem a newsletter e solicita que todos
      os observers sejam notificados */
    public function addMensagen(string $mensagem): void
    {
        $this->mensagens[] = $mensagem;
        $this->notifyObservers();
    }
}