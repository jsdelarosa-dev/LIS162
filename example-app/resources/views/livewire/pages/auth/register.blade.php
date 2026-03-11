<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="min-h-screen flex items-center justify-center bg-black px-4">

    <!-- Register Card -->
    <div class="w-full max-w-sm bg-gray-900 border border-gray-800 rounded-xl shadow-2xl px-8 py-10">

        <!-- Header -->
        <div class="text-center mb-8">
            <img
                src="{{ asset('images/vst logo.jpeg') }}"
                alt="UPVST Logo"
                class="mx-auto mb-4 h-24 w-24 rounded-xl shadow"
            >

            <h1 class="text-2xl font-bold text-white">
                UPVST Web Database
            </h1>

            <p class="text-sm text-gray-400 mt-1">
                Create your account
            </p>
        </div>

        <!-- Form -->
        <form wire:submit="register" class="space-y-4">

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" class="text-white"/>
                <x-text-input
                    wire:model="name"
                    id="name"
                    type="text"
                    name="name"
                    class="block mt-1 w-full rounded-lg bg-gray-800 border-gray-700 text-white focus:border-red-600 focus:ring-red-600"
                    required
                    autofocus
                    autocomplete="name"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-red-500" />
            </div>

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-white"/>
                <x-text-input
                    wire:model="email"
                    id="email"
                    type="email"
                    name="email"
                    class="block mt-1 w-full rounded-lg bg-gray-800 border-gray-700 text-white focus:border-red-600 focus:ring-red-600"
                    required
                    autocomplete="username"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-500" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="text-white"/>
                <x-text-input
                    wire:model="password"
                    id="password"
                    type="password"
                    name="password"
                    class="block mt-1 w-full rounded-lg bg-gray-800 border-gray-700 text-white focus:border-red-600 focus:ring-red-600"
                    required
                    autocomplete="new-password"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white"/>
                <x-text-input
                    wire:model="password_confirmation"
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    class="block mt-1 w-full rounded-lg bg-gray-800 border-gray-700 text-white focus:border-red-600 focus:ring-red-600"
                    required
                    autocomplete="new-password"
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-red-500" />
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between text-sm pt-2">

                <a
                    href="{{ route('login') }}"
                    wire:navigate
                    class="text-gray-400 hover:text-white hover:underline"
                >
                    Already registered?
                </a>
            </div>

            <!-- Register Button -->
            <div class="pt-3">
                <x-primary-button
                    class="w-full justify-center py-3 text-sm font-semibold bg-red-600 hover:bg-red-700 transition">
                    {{ __('Register') }}
                </x-primary-button>
            </div>

        </form>

    </div>
</div>

