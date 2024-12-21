<?php

namespace App\Livewire\Admin;

use App\Models\AboutSite;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class WriteAbouteSite extends Component
{
    public $about;

    public $delete_id;
    public $on_about;
    public $about_update;
    public $of_about;

    public $abouts;
    #[Layout('layouts.admin')]
    public function render()
    {
        $this->abouts = AboutSite::all();
        return view('livewire.admin.write-aboute-site');
    }

    public function save()
    {
        DB::table('about_sites')->insert([
            'about' => $this->about,
            'On/oF' => 0
        ]);

        $this->reset(['about']);
    }

    public function delete($id)
    {
        $this->delete_id = AboutSite::find($id)->delete();
    }

    public function on_upda($id)
    {
       $this->on_about = AboutSite::find($id)->update([
            'On/oF' => 1
        ]);
    }

    public function of_upda($id)
    {
        $this->of_about = AboutSite::find($id)->update([
            'On/oF' => 0
        ]);
    }
}
