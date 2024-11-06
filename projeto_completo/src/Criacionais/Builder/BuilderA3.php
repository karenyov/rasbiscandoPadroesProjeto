<?php

namespace DesignPatterns\Criacionais\Builder;

class BuilderA3 implements BuilderInterfaceGeradorPDF
{
    private GeradorPDF $geradorPDF;

    public function  __construct()
    {
        $this->geradorPDF = new GeradorPDF();
    }

    public function getGeradorPDF(): GeradorPDF
    {
        return $this->geradorPDF;
    }

    public function setPageConfiguration(): void
    {
        $this->geradorPDF->setPageOrientation('portrait');
        $this->geradorPDF->setUnit('mm');
        $this->geradorPDF->setPageSizeX(297);
        $this->geradorPDF->setPageSizeY(420);
        $this->geradorPDF->setPageColor('#ffffff');
        $this->geradorPDF->setEncode('UTF-8');
    }

    public function setMargin(): void
    {
        $this->geradorPDF->setMarginTop(60);
        $this->geradorPDF->setMarginRight(40);
        $this->geradorPDF->setMarginBottom(60);
        $this->geradorPDF->setMarginLeft(40);
    }

    public function setHeader(): void
    {
        $this->geradorPDF->setHasHeader(false);
        $this->geradorPDF->setHeaderHeigh(0);
    }

    public function setFooter(): void
    {
        $this->geradorPDF->setHasFooter(false);
        $this->geradorPDF->setFooterHeigh(0);
    }
}