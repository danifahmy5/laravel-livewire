<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Form;

class LoginForm extends Form
{
    #[Rule(rule: ['required', 'email'])]
    public $email = '';

    #[Rule(rule: ['required'])]
    public $password = '';

    public function login()
    {
        $attempt = Auth::attempt($this->validate());

        if ($attempt) {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'email / password tidak terdaftar',
        ]);
    }
}
