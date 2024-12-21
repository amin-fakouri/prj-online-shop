<?php

namespace App\Livewire\Admin\Category;

use App\Models\Categories;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateCategory extends Component
{

    public $cat_name;
    public $cats;
    public $delete_cat;

    #[Layout('layouts.admin')]
    public function render()
    {
        $this->cats = Categories::all();
        return view('livewire.admin.category.create-category');
    }

    public function create()
    {
        DB::table('categories')->insert([
            'cat_name' => $this->cat_name
        ]);

        $this->reset(['cat_name']);
    }

    public function delete($id)
    {
        $this->delete_cat = Categories::find($id)->delete();
    }
}
