<?php

namespace App\Livewire\Admin\Feature;

use App\Models\features;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateFeature extends Component
{
    // This Name Is Features;
    public $fes;

    public $fe_name;

    public $save_feature_name;
    #[Layout('layouts.admin')]
    public function render()
    {
        $this->fes = features::all();
        return view('livewire.admin.feature.create-feature');
    }

    public function save()
    {
        $this->save_feature_name = DB::table('features')->insert([
            'fe_name' => $this->fe_name
        ]);

        $this->reset(['fe_name']);
    }

    public function delete($id)
    {
        $this->delete_id = features::find($id)->delete();
    }
}
