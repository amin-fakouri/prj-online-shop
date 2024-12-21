<?php

namespace App\Livewire\Users;

use App\Models\Categories;
use App\Models\categories_sub_categories;
use App\Models\products;
use App\Models\SubCategories;
use App\Models\users_products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class UserProduct extends Component
{
    public $find_products;
    public $products;
    public $categories;
    public $sub_categories;
    public $categories_sub_categories;
    public $users_products;

    public $find_mark_id;
    public $delete_mark;

    #[Layout('layouts.app')]
    public function mount($id)
    {
        $this->find_products = Categories::find($id);
    }
    public function render()
    {
        $this->products = products::all();
        $this->categories = Categories::all();
        $this->sub_categories = SubCategories::all();
        $this->categories_sub_categories = categories_sub_categories::all();
        $this->users_products = users_products::all();

        return view('livewire.users.user-product');
    }

    public function mark($id)
    {
        $this->find_mark_id = DB::table('users_products')->insert([
            'products_id' => $id,
            'users_id' => Auth::id(),
            'mark' => 0
        ]);
    }

    public function delete($id)
    {
        $this->delete_mark = users_products::find($id)->delete();
    }
}
