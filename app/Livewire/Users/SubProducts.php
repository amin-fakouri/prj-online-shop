<?php

namespace App\Livewire\Users;

use App\Models\products;
use App\Models\SubCategories;
use Livewire\Attributes\Layout;
use Livewire\Component;

class SubProducts extends Component
{
    public $find_sub_product;

    public $products;

    #[Layout('layouts.app')]
    public function mount($id)
    {
        $this->find_sub_product = SubCategories::find($id);
    }

    public function render()
    {
        $this->products = products::all();
        return view('livewire.users.sub-products');
    }
}
