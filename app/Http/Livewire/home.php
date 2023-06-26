<?php

namespace App\Http\Livewire;

use Livewire\Component;

class home extends Component
{
    public function contact()
    {
        $page="livewire.contact";
    }

    public function render()
    {
        return view('livewire.home');
    }
}
