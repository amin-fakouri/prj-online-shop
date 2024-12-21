<?php

namespace App\Livewire\Admin\Feature;

use App\Models\Categories;
use App\Models\features;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class EditeFeature extends Component
{
    public $find_fe_id;

    public $new_fe_name;
    public $update_new;

    public $delete_id;

    #[Layout('layouts.admin')]
    public function mount($fe_id)
    {
        $this->find_fe_id = features::find($fe_id);
    }

    public function render()
    {
        return view('livewire.admin.feature.edite-feature');
    }

    public function update($id)
    {
        $this->update_new = features::find($id);
        $this->update_new = DB::table('features')->update([
            'fe_name' => $this->new_fe_name
        ]);

        $this->reset(['new_fe_name']);
    }


}
