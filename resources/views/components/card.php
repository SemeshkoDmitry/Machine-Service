<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public string $title;
    public string $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function render()
    {
        return view('components.card');
    }
}