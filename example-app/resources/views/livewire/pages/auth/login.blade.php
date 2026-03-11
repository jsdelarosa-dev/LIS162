<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    public function login(): void
    {
        $this->validate();
        $this->form->authenticate();
        Session::regenerate();

        $this->redirectIntended(
            default: route('dashboard', absolute: false),
            navigate: true
        );
    }
}; ?>

<div class="min-h-screen flex items-center justify-center bg-black px-4">

    <!-- Login Card -->
    <div class="w-full max-w-sm bg-gray-900 rounded-xl shadow-2xl px-8 py-10 border border-gray-800">

        <!-- Header -->
        <div class="text-center mb-8">

            <!-- LOGO -->
            <img
                src="{{ asset('images/vst logo.jpeg') }}"
                alt="UPVST Logo"
                class="mx-auto mb-5 h-28 w-28 rounded-xl shadow-lg"
            >

            <h1 class="text-2xl font-bold text-white">
                UPVST Web Database
            </h1>

            <p class="text-sm text-gray-400 mt-1">
                Sign in to continue
            </p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-gray-300" :status="session('status')" />

        <!-- Form -->
        <form wire:submit="login" class="space-y-5">

            <!-- Email -->
            <div>
                <x-input-label
                    for="email"
                    :value="__('Email')"
                    class="text-white"
                />

                <x-text-input
                    wire:model="form.email"
                    id="email"
                    type="email"
                    name="email"
                    class="block mt-1 w-full rounded-lg bg-gray-800 border-gray-700 text-white
                           focus:border-red-600 focus:ring-red-600"
                    required
                    autofocus
                    autocomplete="username"
                />

                <x-input-error :messages="$errors->get('form.email')" class="mt-1 text-red-500" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label
                    for="password"
                    :value="__('Password')"
                    class="text-white"
                />

                <x-text-input
                    wire:model="form.password"
                    id="password"
                    type="password"
                    name="password"
                    class="block mt-1 w-full rounded-lg bg-gray-800 border-gray-700 text-white
                           focus:border-red-600 focus:ring-red-600"
                    required
                    autocomplete="current-password"
                />

                <x-input-error :messages="$errors->get('form.password')" class="mt-1 text-red-500" />
            </div>

            <!-- Remember / Forgot -->
            <div class="flex items-center justify-between text-sm pt-1">

                <label for="remember" class="inline-flex items-center">
                    <input
                        wire:model="form.remember"
                        id="remember"
                        type="checkbox"
                        class="rounded border-gray-600 bg-gray-800 text-red-600 focus:ring-red-600"
                        name="remember"
                    >
                    <span class="ml-2 text-gray-400">
                        {{ __('Remember me') }}
                    </span>
                </label>

                @if (Route::has('password.request'))
                    <a
                        href="{{ route('password.request') }}"
                        wire:navigate
                        class="text-gray-400 hover:text-white hover:underline"
                    >
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>

            <!-- Login Button -->
            <div class="pt-3">
                <x-primary-button
                    class="w-full justify-center py-3 text-sm font-semibold
                           bg-red-600 hover:bg-red-700 text-white transition">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

        </form>

    </div>
</div>


