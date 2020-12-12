<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $title;
    public function render()
    {
        return view('livewire.post');
    }
}
