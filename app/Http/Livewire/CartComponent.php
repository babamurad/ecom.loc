<?php

namespace App\Http\Livewire;

//use Gloudemans\Shoppingcart\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Cart;


class CartComponent extends Component
{

    public function increaseQuantity($rowId, $qty)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty =  $qty + 1;
        $product->qty = $qty;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }

    public function decreaseQuantity($rowId, $qty)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty =  $qty - 1;
        $product->qty = $qty;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }

    public function destroy($id)
    {
        Cart::instance('cart')->remove($id);
        $this->emitTo('cart-icon-component', 'refreshComponent');
        session()->flash('success', 'Item has been removed!');
    }

    public function clearAll()
    {
        Cart::instance('cart')->destroy();
        $this->emitTo('cart-icon-component', 'refreshComponent');
    }

    public function checkout()
    {
        if (Auth::check())
        {
            return redirect()->route('shop.checkout');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout()
    {
        if (Cart::instance('cart')->count() > 0)
        {
            session()->put('checkout', [
                'discount' => 0,
                'subtotal' => Cart::instance('cart')->subtotal(),
                'tax' => Cart::instance('cart')->tax(),
                'total' => Cart::instance('cart')->total(),
            ]);
        }
        else{
            session()->forget('checkout');
            return;
        }
    }

    public function render()
    {
        $this->setAmountForCheckout();
        return view('livewire.cart-component');
    }
}
