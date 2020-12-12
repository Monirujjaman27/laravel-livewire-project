<?php

namespace App\Http\Livewire;
use App\Models\Slider as Modelslider;
use Livewire\Component;

class Slider extends Component
{
    public $title;
    public $t;
    public function render()
    {
        // $data = Modelslider::get();
        return view('livewire.slider');
    }
}
