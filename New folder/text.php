<?php
namespace App;

class Text extends Field
{
    public function Render(): string
    {
        return <<<HTML
<input type="text"  name="{$this->name}">
HTML;
    }

}
