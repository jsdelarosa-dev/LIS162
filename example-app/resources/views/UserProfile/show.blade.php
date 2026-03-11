<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            User Profile Details
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
                        Registered swimmer profile details
                    </p>
                </div>

                <!-- BODY -->
                <div class="px-6 py-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        <!-- USER ID -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                User ID
                            </p>
                            <p class="text-xl font-bold text-white">
                                {{ $userprofile['user_id'] }}
                            </p>
                        </div>

                        <!-- USERNAME -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Username
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $userprofile['username'] }}
                            </p>
                        </div>

                        <!-- FIRST NAME -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                First Name
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $userprofile['first_name'] }}
                            </p>
                        </div>

                        <!-- LAST NAME -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Last Name
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $userprofile['last_name'] }}
                            </p>
                        </div>

                        <!-- EMAIL -->
                        <div class="bg-red-700 p-5 rounded-xl sm:col-span-2">
                            <p class="text-xs uppercase text-white mb-1">
                                Email
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $userprofile['email'] }}
                            </p>
                        </div>

                        <!-- AGE -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Age
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $userprofile['user_age'] }}
                            </p>
                        </div>

                        <!-- BATCH YEAR -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Batch Year
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $userprofile['batch_year'] }}
                            </p>
                        </div>

                        <!-- GENDER -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Gender
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $userprofile['Gender'] }}
                            </p>
                        </div>

                        <!-- UNIVERSITY ID -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                University ID
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $userprofile['University_id'] }}
                            </p>
                        </div>

                    </div>
                </div>

                <!-- FOOTER -->
                <div class="px-6 py-5 border-t border-slate-700 flex justify-between items-center">

                    <a href="{{ route('userprofile.index') }}"
                       class="px-5 py-2 bg-slate-700 text-white rounded-lg font-semibold
                              hover:bg-slate-600 transition">
                        ← Back to List
                    </a>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>
