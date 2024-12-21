<?php

namespace App\Livewire\Admin\SubCat;

use App\Models\Categories;
use App\Models\SubCategories;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateSubCategories extends Component
{
    public $sub_name;
    public $sub_cats;
    public $delete_sub_cat;
    #[Layout('layouts.admin')]
    public function render()
    {
        $this->sub_cats = SubCategories::all();
        return view('livewire.admin.sub-cat.create-sub-categories');
    }

    public function create()
    {
        DB::table('sub_categories')->insert([
            'sub_name' => $this->sub_name
        ]);

        $this->reset(['sub_name']);
    }

    public function delete($id)
    {
        $this->delete_sub_cat = SubCategories::find($id)->delete();
    }
}
