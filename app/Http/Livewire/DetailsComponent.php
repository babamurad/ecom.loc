<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class DetailsComponent extends Component
{
    public $slug;
    public $rating;
    public $comment;
    public $product_id;


    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function updated($fields)
    {

//        $this->validateOnly($fields,[
//            'rating' => 'required',
//            'comment' => 'required',
//        ]);
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success', 'Item added in Cart');
        return redirect()->route('shop.cart');
    }

    public function addReview()
    {
        $product = Product::where('slug', $this->slug)->first();

        if (Auth::check())
        {
            $review = new Review();
            $review->rating = $this->rating;
            $review->comment = $this->comment;
            $review->user_id = Auth::user()->id;
            $review->product_id = $product->id;
            $review->save();

            session()->flash('success', 'Your Review has been added successfully!');
            return redirect()->back();
        }
        else
        {
            session()->flash('error', 'Yu must log in.');
            return redirect()->back();
        }

    }

    public function render()
    {
        $categories = Category::all();
        $product = Product::where('slug', $this->slug)->first();

        $st5 = Review::where('rating', '5')->where('product_id', $product->id)->count();
        $st4 = Review::where('rating', '4')->where('product_id', $product->id)->count();
        $st3 = Review::where('rating', '3')->where('product_id', $product->id)->count();
        $st2 = Review::where('rating', '2')->where('product_id', $product->id)->count();
        $st1 = Review::where('rating', '1')->where('product_id', $product->id)->count();
        $sum = Review::where('product_id', $product->id)->sum('rating');
        $reviews = Review::where('product_id', $product->id)->get();

        $rproducts = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(5)->get();
        $nprods = Product::latest()->take(4)->get();
        return view('livewire.details-component', compact('product', 'rproducts', 'nprods', 'categories', 'reviews', 'st5', 'st4', 'st3', 'st2', 'st1', 'sum'));
    }
}
