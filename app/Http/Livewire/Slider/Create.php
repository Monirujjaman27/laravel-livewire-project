<?php

namespace App\Http\Livewire\Slider;

use Livewire\Component;
use App\Models\Slider as ModelSlider;

class Create extends Component
{
    public $title;
    public $subtitle;
    public $counterText;
    public $counter;
    public $sliderbg;
    public $buttonName;
    public $buttonUrl;
    public  $item;

    protected $listeners = [
        'getModalId',
    ];
    /* 
    * action when click close button
    * action when click trush button 
     */
    public function close()
    {
        $this->emptyValue();
    }

    /* 
    value of the input fild
    */
    public function getModalId($item)
    {
        $itemIdentity = $this->item = $item;
        $fineBydata = ModelSlider::find($itemIdentity);

        $this->title       =  $fineBydata->title;
        $this->subtitle    =  $fineBydata->subtitle;
        $this->counterText =  $fineBydata->counterText;
        $this->counter     =  $fineBydata->counter;
        $this->sliderbg    =  $fineBydata->sliderbg;
        $this->buttonName  =  $fineBydata->buttonName;
        $this->buttonUrl   =  $fineBydata->buttonUrl;
    }
    /*  
        validation rule
    */ 
   protected $rules = [
       'title'        => 'required|min:10|max:20',
       'subtitle'     => 'required|min:5|max:15',
        'counterText' => 'required',
        'counter'     => 'required',
        'sliderbg'    => 'required',
        'buttonName'  => 'required',
        'buttonUrl'   => 'required'
    ];

    /*     
        live validation preview
    */  
      public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    /* 
    save data into database 
    *update data into database
    */
    public function save()
    {
        $validatedData = $this->validate();
        if ($this->item) {
            ModelSlider::find($this->item)->update($validatedData);
            $this->dispatchBrowserEvent('successalert', ['success' => 'Updated Successfully']);
        } else {
            ModelSlider::create($validatedData);
            $this->dispatchBrowserEvent('successalert', ['success' => 'Created Successfully']);
        }
        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('closeModal');
        $this->emptyValue();
    }
    /* 
    empty data after submite
    */
    public function emptyValue()
    {
        $this->item        = null;
        $this->title       = null;
        $this->subtitle    = null;
        $this->counterText = null;
        $this->counter     = null;
        $this->sliderbg    = null;
        $this->buttonName  = null;
        $this->buttonUrl   = null;
    }
    /* 
        view
    */
    public function render()
    {
        return view('livewire.slider.create');
    }
}
