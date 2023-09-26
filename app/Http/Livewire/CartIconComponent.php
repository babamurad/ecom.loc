<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartIconComponent extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];

    public function destroy($id)
    {
        Cart::instance('cart')->remove($id);
        $this->emitTo('cart-icon-component', 'refreshComponent');
        session()->flash('success', 'Item has been removed!');
    }

    public function render()
    {
        return view('livewire.cart-icon-component');
    }

}
