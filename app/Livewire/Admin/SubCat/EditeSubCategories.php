<?php

namespace App\Livewire\Admin\SubCat;

use App\Models\Categories;
use App\Models\SubCategories;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class EditeSubCategories extends Component
{

    public $find_sub_id;

    public $new_sub_name;

    public $update_new;

    #[Layout('layouts.admin')]
    public function mount($sub_id)
    {
        $this->find_sub_id = SubCategories::find($sub_id);
    }

    public function render()
    {
        return view('livewire.admin.sub-cat.edite-sub-categories');
    }

    public function update($id)
    {
        $this->update_new = SubCategories::find($id);
        $this->update_new = DB::table('sub_categories')->update([
            'sub_name' => $this->new_sub_name
        ]);

        $this->reset(['new_sub_name']);
    }
}
