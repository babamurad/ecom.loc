<?php

namespace App\Http\Livewire;

use http\Env\Request;
use Livewire\Component;

class UserComponent extends Component
{
    public function render()
    {
        return view('livewire.user-component');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }
}
