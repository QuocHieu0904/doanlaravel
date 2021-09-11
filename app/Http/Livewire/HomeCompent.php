<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeCompent extends Component
{
    public function render()
    {
        return view('livewire.home-compent')->layout('layouts.base');
    }
}
