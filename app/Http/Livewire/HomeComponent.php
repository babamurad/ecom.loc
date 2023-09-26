<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomeComponent extends Component
{

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        $this->emitTo('wishlist-icon-component','refreshComponent');
    }

    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem)
        {
            if ($witem->id == $product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-icon-component','refreshComponent');
                return;
            }
        }
    }

    public function getRating($product_id)
    {
        $stars = DB::select('SELECT SUM(r.rating)/COUNT(r.rating) AS averRating  FROM reviews r  WHERE r.product_id=?', [$product_id]);
        if ($stars > 0)
        {
            return $this->stars = $stars;
        } else
        {
            return $this->stars = 0;
        }
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success', 'Item added in Cart');
        $this->emitTo('wishlist-icon-component','refreshComponent');
        return redirect()->route('shop.cart');
    }

    public function render()
    {
        $slides = HomeSlider::where('status', 1)->get();
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(8);
        $fproducts = Product::where('featured', 1)->inRandomOrder()->get()->take(8);
        $categories = Category::where('is_popular', 1)->inRandomOrder()->get()->take(8);
        return view('livewire.home-component', compact('slides', 'lproducts', 'fproducts', 'categories'))->layout('layouts.app', compact('categories'));
    }
}
