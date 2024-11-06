<?php

namespace DesignPatterns\Criacionais\Builder;

class GeradorPDFDirector
{
    private BuilderInterfaceGeradorPDF $builderGeradorPDF;

    public function __construct(BuilderInterfaceGeradorPDF $builderGeradorPDF)
    {
        $this->builderGeradorPDF = $builderGeradorPDF;
    }

    public function setBuilderGeradorPDF(BuilderInterfaceGeradorPDF $builderGeradorPDF)
    {
        $this->builderGeradorPDF = $builderGeradorPDF;
    }

    public function criarGeradorPDF(): void
    {
        $this->builderGeradorPDF->setPageConfiguration();
        $this->builderGeradorPDF->setMargin();
        $this->builderGeradorPDF->setHeader();
        $this->builderGeradorPDF->setFooter();
    }

    public function criarGeradorPDFNoHeader(): void
    {
        $this->builderGeradorPDF->setPageConfiguration();
        $this->builderGeradorPDF->setMargin();
        $this->builderGeradorPDF->setFooter();
    }

    public function criarGeradorPDFNoHeaderNoFooter(): void
    {
        $this->builderGeradorPDF->setPageConfiguration();
        $this->builderGeradorPDF->setMargin();
    }
}