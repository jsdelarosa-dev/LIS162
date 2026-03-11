<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Edit User Profile
        </h2>
    </x-slot>

    <!-- PAGE BACKGROUND -->
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <!-- MAIN CARD -->
            <div class="bg-slate-800 rounded-2xl shadow-xl">

                <!-- HEADER -->
                <div class="px-6 py-5 border-b border-slate-700">
                    <h3 class="text-lg font-semibold text-white">
                        Profile Information
                    </h3>
                    <p class="text-sm text-slate-400">
                        Update registered swimmer profile details
                    </p>
                </div>

                <!-- FORM -->
                <form action="{{ route('userprofile.update', $userprofile->user_id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="px-6 py-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                            <!-- USER ID -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    User ID
                                </label>
                                <input
                                    type="text"
                                    name="user_id"
                                    value="{{ $userprofile->user_id }}"
                                    class="w-full bg-transparent border-none text-white text-xl font-bold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- USERNAME -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Username
                                </label>
                                <input
                                    type="text"
                                    name="username"
                                    value="{{ $userprofile->username }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- FIRST NAME -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    First Name
                                </label>
                                <input
                                    type="text"
                                    name="first_name"
                                    value="{{ $userprofile->first_name }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- LAST NAME -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Last Name
                                </label>
                                <input
                                    type="text"
                                    name="last_name"
                                    value="{{ $userprofile->last_name }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- EMAIL -->
                            <div class="bg-red-700 p-5 rounded-xl sm:col-span-2">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Email
                                </label>
                                <input
                                    type="email"
                                    name="email"
                                    value="{{ $userprofile->email }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- AGE -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Age
                                </label>
                                <input
                                    type="text"
                                    name="user_age"
                                    value="{{ $userprofile->user_age }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- BATCH YEAR -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Batch Year
                                </label>
                                <input
                                    type="text"
                                    name="batch_year"
                                    value="{{ $userprofile->batch_year }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- GENDER -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Gender
                                </label>
                                <input
                                    type="text"
                                    name="Gender"
                                    value="{{ $userprofile->Gender }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- UNIVERSITY ID -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    University ID
                                </label>
                                <input
                                    type="text"
                                    name="University_id"
                                    value="{{ $userprofile->University_id }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                        </div>
                    </div>

                    <!-- FOOTER -->
                    <div class="px-6 py-5 border-t border-slate-700 flex justify-between items-center">

                        <a href="{{ route('userprofile.index') }}"
                           class="px-5 py-2 bg-slate-700 text-white rounded-lg font-semibold
                                  hover:bg-slate-600 transition">
                            ← Cancel
                        </a>

                        <button
                            type="submit"
                            class="px-6 py-2 bg-red-600 text-white rounded-lg font-semibold
                                   hover:bg-red-700 transition">
                            Save Changes
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
