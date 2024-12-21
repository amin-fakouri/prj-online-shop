<?php

namespace App\Livewire;

use App\Models\AboutSite;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\users_products;
use App\Models\products;
use App\Models\products_user;
use App\Models\productsUser;
use App\Models\User;
use App\Models\_productsUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class MyDashboard extends Component
{
    public $find_user_id;
    public $find_product_id;

    public $users;
    public $categories;
    public $products;
    public $sub_categories;
    public $abouts;

    // Table Mark
    public $users_products;

    public $number = 1;

    public $test;
    public $page_mark = 0;

    #[Layout('layouts.app')]
    public function mount($user_id)
    {
        $this->find_user_id = User::find($user_id);
    }

    public function render()
    {
        $this->categories = Categories::all();
        $this->users = User::all();
        $this->products = products::all();
        $this->users_products = users_products::all();
        $this->sub_categories = SubCategories::all();
        $this->abouts = AboutSite::all();
        return view('livewire.my-dashboard');
    }

    public function open_card_mark()
    {
        $this->page_mark = 1;
    }

    public function close()
    {
        $this->page_mark = 0;
    }




}




