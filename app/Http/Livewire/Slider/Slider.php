<?php

namespace App\Http\Livewire\Slider;

use Livewire\Component;
use App\Models\Slider as ModelSlider;
use Illuminate\Contracts\Session\Session;
use Livewire\WithPagination;

class Slider extends Component
{


    public $item;
    protected $listeners = ['refreshParent' => '$refresh'];


    // delete into database 
    public function delete($id)
    {
        ModelSlider::destroy($id);
        $this->dispatchBrowserEvent('successalert', ['success' => 'Delete Successfully']);
    }



    // action after edite button click
    public function selectItem($data, $action)
    {
        $this->item = $data;
        if ($action == 'edit') {
            $this->emit('getModalId', $this->item);
            $this->dispatchBrowserEvent('openmodal');
        }
    }


    public function render()
    {
        return view('livewire.slider.slider', ['datas' => ModelSlider::orderBy('id', 'DESC')->paginate(10)]);
    }
}
