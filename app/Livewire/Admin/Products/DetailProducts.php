<?php

namespace App\Livewire\Admin\Products;

use App\Models\features_products;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class DetailProducts extends Component
{
    public $find_id_product;
    public $sub_cat;
    public $fe_pros;

    public $pro_id;
    public $fe_id;
    public $val;

    public $save_inputs;

    #[Layout('layouts.admin')]
    public function mount($pro_id)
    {
        $this->find_id_product = products::find($pro_id);
        $this->sub_cat = $this->find_id_product->sub_cat;
    }

    public function render()
    {
        $this->fe_pros = features_products::all();
        return view('livewire.admin.products.detail-products');
    }

    public function save()
    {
        $this->save_inputs = DB::table('features_products')->insert([
            'fe_id' => $this->fe_id,
            'pro_id' => $this->pro_id,
            'val' => $this->val

        ]);

        $this->reset(['fe_id', 'val']);
    }
}
