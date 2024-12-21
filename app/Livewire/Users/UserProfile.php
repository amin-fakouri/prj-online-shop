<?php

namespace App\Livewire\Users;

use App\Models\products;
use App\Models\Profile;
use App\Models\User;
use App\Models\users_products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UserProfile extends Component
{
    use WithFileUploads;

    public $user_id;

    public $my_profiles;

    public $user_name;
    public $f_name;
    public $l_name;
    public $phone_number;
    public $n_code;
    public $e_mail;
    public $pic_url;

    public $pics_2;

    public $user_name_2;
    public $f_name_2;
    public $l_name_2;
    public $phone_number_2;
    public $n_code_2;
    public $e_mail_2;

    public $page_mode = 0;
    public $update_profile;

    public $products;
    public $users_products;
    #[Layout('layouts.app')]
    public function mount($id)
    {
        $this->user_id = User::find($id);
    }

    public function render()
    {
        $this->my_profiles = Profile::all();
        $this->products = products::all();
        $this->users_products = users_products::all();
        return view('livewire.users.user-profile');
    }

    public function see_profile()
    {
        $this->page_mode = 1;
    }

    public function save()
    {
        $validatedData_1 = $this->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'user_name' => 'required',
            'phone_number' => 'required',
            'e_mail' => 'required',
            'n_code' => 'required',
            'pic_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $validatedData_1['pic_url'] = $this->pic_url->store('user_pics', 'public');


        DB::table('profiles')->insert([
            'user_id' => Auth::id(),
            'user_name' => $this->user_name,
            'f_name' => $this->f_name,
            'l_name' => $this->l_name,
            'phone_number' => $this->phone_number,
            'n_code' => $this->n_code,
            'e_mail' => $this->e_mail,
            'pic_url' => $validatedData_1['pic_url']
        ]);
    }

    public function my_profile()
    {
        $this->page_mode = 1;
    }

    public function change_profile()
    {
        $this->page_mode = 2;
    }

    public function home()
    {
        $this->page_mode = 0;
    }

    public function save_profile($id)
    {
        $this->update_profile = Profile::find($id)->update([
            'user_id' => Auth::id(),
            'user_name' => $this->user_name_2,
            'f_name' => $this->f_name_2,
            'l_name' => $this->l_name_2,
            'phone_number' => $this->phone_number_2,
            'n_code' => $this->n_code_2,
            'e_mail' => $this->e_mail_2,
        ]);
    }

    public function change_photo_profile()
    {
        $this->page_mode = 3;
    }

    public function save_photo_profile($id)
    {
        $validatedData = $this->validate([
            'pics_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $validatedData['pics_2'] = $this->pics_2->store('user_pics', 'public');


        $this->update_photo_profile = Profile::find($id)->update([
            'pic_url' => $validatedData['pics_2']
        ]);

    }


}
