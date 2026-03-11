<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Profile Settings
        </h2>
    </x-slot>

    <!-- PAGE BACKGROUND -->
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- UPDATE PROFILE INFO -->
            <div class="bg-white rounded-2xl shadow-xl">
   

                <div class="px-6 py-6">
                    <div class="max-w-xl">
                        <livewire:profile.update-profile-information-form />
                    </div>
                </div>
            </div>

            <!-- UPDATE PASSWORD -->
            <div class="bg-white rounded-2xl shadow-xl">
                <div class="px-6 py-5 border-b border-slate-700">


                <div class="px-6 py-6">
                    <div class="max-w-xl">
                        <livewire:profile.update-password-form />
                    </div>
                </div>
            </div>

            <br><br>

            <!-- DELETE ACCOUNT -->
            <div class="bg-white rounded-2xl shadow-xl">
                <div class="px-6 py-5 border-b border-red-800">

                </div>

                <div class="px-6 py-6">
                    <div class="max-w-xl">
                        <livewire:profile.delete-user-form />
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
