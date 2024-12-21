<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Livewire\Attributes\Layout;
use Illuminate\Validation\Rules;
use Livewire\Component;

class MyRegister extends Component
{

    public $phone_number;
    public string $password = '12345678';
    public string $password_confirmation = '12345678';
    public $role_code = 3;

    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.auth.my-register');
    }

    public function register()
    {
        $validated = $this->validate([
            'phone_number' => ['required', 'digits:11', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'role_code' => ['required'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);


        return redirect(URL::signedRoute('my_dashboard', ['user_id' => $user->id]));
    }
}
