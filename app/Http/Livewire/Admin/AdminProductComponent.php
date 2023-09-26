<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $product_id;

    public function deleteProduct()
    {
        $product = Product::find($this->product_id);
        if ($product->image)
        {
            unlink('assets/imgs/products/'.$product->image);
        }
        //удаление галереи изображений
        if ($product->images)
        {
            $images = explode(',', $product->images);
            foreach ($images as $image)
            {
                if ($image)
                {
                    unlink('assets/imgs/products/'.$product->image);
                }
            }
        }
        $product->delete();
        session()->flash('success', 'Product has been deleted successfully!');
    }

    public function render()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.admin-product-component', compact('products'));
    }
}
