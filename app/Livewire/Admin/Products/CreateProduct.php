<?php

namespace App\Livewire\Admin\Products;

use App\Models\Categories;
use App\Models\categories_sub_categories;
use App\Models\products;
use App\Models\SubCategories;
use Illuminate\Support\Facades\DB;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateProduct extends Component

{
    use WithFileUploads;

    public $sub_categories;
    public $products;
    public $categories;
    public $subs_cats;

    public $save_inputs;
    public $sub_cat_id;
    public $p_name;
    public $p_price;
    public $p_code;
    public $pic_url;
    public $about_pro;
    public $location_page;

    public $delete_product;
    #[Layout('layouts.admin')]
    public function render()
    {
        $this->sub_categories = SubCategories::all();
        $this->products = products::all();
        $this->categories = Categories::all();
        $this->subs_cats = categories_sub_categories::all();
        return view('livewire.admin.products.create-product');
    }

    public function save()
    {
        $validatedData = $this->validate([
            'sub_cat_id' => 'required',
            'p_name' => 'required',
            'p_price' => 'required',
            'about_pro' => 'required',
            'location_page' => 'required',
            'pic_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $validatedData['pic_url'] = $this->pic_url->store('pics', 'public');

        DB::table('products')->insert([
            'sub_cat_id' => $this->sub_cat_id,
            'p_name' => $this->p_name,
            'location_page' => $this->location_page,
            'p_code' => rand(100, 999999),
            'p_price' => $this->p_price,
            'about' => $this->about_pro,
            'pic_url' => $validatedData['pic_url']
        ]);

        $this->reset(['sub_cat_id', 'p_name', 'pic_url', 'about_pro', 'p_price', 'location_page']);
    }

    public function delete($id)
    {
        $this->delete_product = products::find($id)->delete();
    }
}

