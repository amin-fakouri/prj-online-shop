<?php

namespace App\Livewire\Admin\Category;

use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class EditeNameCategory extends Component
{
    public $find_category;

    public $update_new;

    public $new_cat_name;

    #[Layout('layouts.admin')]
    public function mount($cat_id)
    {
        $this->find_category = Categories::find($cat_id);
    }

    public function render()
    {
        return view('livewire.admin.category.edite-name-category');
    }

    public function update($id)
    {
        $this->update_new = Categories::find($id);
        $this->update_new = DB::table('categories')->update([
            'cat_name' => $this->new_cat_name
        ]);

        $this->reset(['new_cat_name']);
    }
}
