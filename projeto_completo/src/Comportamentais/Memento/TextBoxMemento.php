<?php

namespace DesignPatterns\Comportamentais\Memento;

class TextBoxMemento implements MementoInterface
{
    private TextBox $textBox;
    private int $x;
    private int $y;
    private string $text;
    private string $fontFamily;
    private int $fontSize;
    private string $textAlign;
    private string $fontWeight;

    public function __construct(
        TextBox $textBox,
        int $x,
        int $y,
        string $text,
        string $fontFamily,
        int $fontSize,
        string $textAlign,
        string $fontWeight
    ) {
        $this->textBox = $textBox;
        $this->x = $x;
        $this->y = $y;
        $this->text = $text;
        $this->fontFamily = $fontFamily;
        $this->fontSize = $fontSize;
        $this->textAlign = $textAlign;
        $this->fontWeight = $fontWeight;
    }

    public function restaurar(): void
    {
        $this->textBox->setPosition($this->x, $this->y);
        $this->textBox->setText($this->text);
        $this->textBox->setFontFamily($this->fontFamily);
        $this->textBox->setFontSize($this->fontSize);
        $this->textBox->setTextAlign($this->textAlign);
        $this->textBox->setFontWeight($this->fontWeight);
    }
}