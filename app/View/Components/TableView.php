<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableView extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title, $description;
    public function __construct()
    {
        $this->title = $title ?? null;
        $this->description = $description ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card', [
            'title' => $this->title,
            'description' => $this->descripstion,
        ]);
    }
}
