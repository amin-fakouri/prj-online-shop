<?php

namespace App\Livewire\Users;

use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Attributes\Layout;
use Livewire\Component;

class BuyProduct extends Component
{
    public $buy_product;

    public $f_name;
    public $l_name;
    public $phone_number_send_product;
    public $now_location;
    public $send_location;
    public $n_code;

    public $p_price;

    public $name_product;
    public $cart_or_money;
    public $code_product;
    public $time_send;
    public $product_id;

    public $form_buy;

    public $page_mode = 1;

    #[Layout('layouts.app')]
    public function mount($id)
    {
        $this->buy_product = products::find($id);
    }

    public function render()
    {
        $this->form_buy = \App\Models\BuyProduct::all();
        return view('livewire.users.buy-product');
    }

    public function buy()
    {



        DB::table('buy_products')->insert([
            'product_id' => $this->product_id,
            'f_name' => $this->f_name,
            'l_name' => $this->l_name,
            'phone_number' => $this->phone_number_send_product,
            'your_location' => $this->now_location,
            'n_code' => $this->n_code,
            'price' => $this->p_price,
            'name_product' => $this->name_product,
            'code_product' => $this->code_product,
            'time_send' => $this->time_send,
        ]);


        session()->flash('message', 'بسته با موفقیت خریداری شد!.');
        return redirect(URL::signedRoute('form_buy', ['id' => $this->product_id]));
    }

    public function card_number()
    {
        $this->page_mode = 2;
    }
}
