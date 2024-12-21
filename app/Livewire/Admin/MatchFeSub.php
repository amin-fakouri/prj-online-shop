<?php

namespace App\Livewire\Admin;

use App\Models\features;
use App\Models\features_sub_categories;
use App\Models\SubCategories;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class MatchFeSub extends Component
{
    public $subcategories;
    public $fes;
    public $fes_subs;

    public $save_sub_fe;
    public $sub_cat_id;
    public $fe_id;
    public $delete_id;

    #[Layout('layouts.admin')]
    public function render()
    {
        $this->subcategories = SubCategories::all();
        $this->fes = features::all();
        $this->fes_subs = features_sub_categories::all();
        return view('livewire.admin.match-fe-sub');
    }

    public function save()
    {
        $this->save_sub_fe = DB::table('features_sub_categories')->insert([
            'features_id' => $this->fe_id,
            'sub_categories_id' => $this->sub_cat_id
        ]);

        $this->reset(['fe_id', 'sub_cat_id']);
    }

    public function delete_feature($id)
    {
        $this->delete_id = features::find($id)->delete();
    }
}
