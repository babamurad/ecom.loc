<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;

class CategoryComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy = "Default Sorting";
    public $slug;

    public function store($product_id, $product_name, $product_price)
    {
//        dd('add from cat');
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success', 'Item added in Cart');
        $this->emitTo('cart-icon-component', 'refreshComponent');
//        return redirect()->back();
    }

    public function changePageSize($size)
    {
        $this->pageSize = $size;
    }

    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $category = Category::where('slug', $this->slug)->first();
        $category_id = $category->id;

        $category_name = $category->name;
        if ($this->orderBy == 'Price: Low to High')
        {
            $products = Product::where('category_id', $category_id)->orderBy('regular_price', 'ASC')->paginate($this->pageSize);
        }
        elseif ($this->orderBy == 'Price: High to Low')
        {
            $products = Product::where('category_id', $category_id)->orderBy('regular_price', 'DESC')->paginate($this->pageSize);
        }
        elseif ($this->orderBy == 'Sort by Newness')
        {
            $products = Product::where('category_id', $category_id)->orderBy('created_at', 'DESC')->paginate($this->pageSize);
        } else
        {
            $products = Product::where('category_id', $category_id)->paginate($this->pageSize);
        }
        $categories = Category::orderBy('name', 'ASC')->get();
        $newProducts = Product::orderBy('created_at', "DESC")->limit(5)->get();
        return view('livewire.category-component', compact('products', 'categories','category_name', 'newProducts'));
    }


}
