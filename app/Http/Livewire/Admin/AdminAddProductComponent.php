<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status = 'instock';
    public $featured = 0;
    public $quantity;
    public $image;
    public $category_id;
    public $images;


    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function addProduct()
    {
        $this->validate([
            'name'              => 'required',
            'slug'              => 'required',
            'short_description' => 'required',
            'description'       => 'required',
            'regular_price'     => 'required',
            'sale_price'        => 'required',
            'sku'               => 'required',
            'stock_status'      => 'required',
            'featured'          => 'required',
            'quantity'          => 'required',
            'image'             => 'required',
            'category_id'       => 'required',
        ]);

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->sku;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products', $imageName);
        $product->image = $imageName;

        if ($this->images)
        {
            $iamgesName = '';
            foreach ($this->images as $key=>$image)
            {
                $imageName = Carbon::now()->timestamp.$key.'.'.$image->extension();
                $image->storeAs('products', $imageName);
                if ($iamgesName == '')
                {
                    $iamgesName = $imageName;
                } else { $iamgesName =$iamgesName.','. $imageName; }

            }
            $product->images = $iamgesName;
        }

        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('success', 'Product has been added!');
    }

    public function render()
    {
        $categories = Category::OrderBy('name', 'ASC')->get();
        return view('livewire.admin.admin-add-product-component', compact('categories'));
    }
}
