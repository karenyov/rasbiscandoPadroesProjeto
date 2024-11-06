<?php

namespace DesignPatterns\Criacionais\Builder;

interface BuilderInterfaceGeradorPDF
{
    public function getGeradorPDF(): GeradorPDF;
    public function setPageConfiguration(): void;
    public function setMargin(): void;
    public function setHeader(): void;
    public function setFooter(): void;
}