<?php

namespace App\Livewire\Users;

use Livewire\Attributes\Layout;
use Livewire\Component;

class FormBuyProduct extends Component
{
    public $find_code_product;
    #[Layout('layouts.app')]
    public function mount($id)
    {
        $this->find_code_product = \App\Models\BuyProduct::find($id);
    }
    public function render()
    {
        return view('livewire.users.form-buy-product');
    }
}
