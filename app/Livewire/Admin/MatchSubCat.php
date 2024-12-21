<?php

namespace App\Livewire\Admin;

use App\Models\Categories;
use App\Models\categories_sub_categories;
use App\Models\SubCategories;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class MatchSubCat extends Component
{
    public $categories;
    public $sub_categories;

    public $cat_id;
    public $sub_cat_id;
    public $cat_sub_cats;

    public $save_cat_id_and_sub_cat_id;

    public $delete_id;
    #[Layout('layouts.admin')]
    public function render()
    {
        $this->categories = Categories::all();
        $this->sub_categories = SubCategories::all();
        $this->cat_sub_cats = categories_sub_categories::all();
        return view('livewire.admin.match-sub-cat');
    }

    public function save()
    {
        $this->save_cat_id_and_sub_cat_id = DB::table('categories_sub_categories')->insert([
            'categories_id' => $this->cat_id,
            'sub_categories_id' => $this->sub_cat_id
        ]);

        $this->reset(['cat_id', 'sub_cat_id']);
    }

    public function delete($id)
    {
        $this->delete_id = categories_sub_categories::find($id)->delete();
    }
}
