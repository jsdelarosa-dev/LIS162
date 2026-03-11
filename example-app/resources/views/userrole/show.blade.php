<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            User Role Details
        </h2>
    </x-slot>

    <!-- PAGE BACKGROUND -->
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <!-- MAIN CARD -->
            <div class="bg-slate-800 rounded-2xl shadow-xl">

                <!-- HEADER -->
                <div class="px-6 py-5 border-b border-slate-700">
                    <h3 class="text-lg font-semibold text-white">
                        Role Information
                    </h3>
                    <p class="text-sm text-slate-400">
                        Assigned user role and affiliation
                    </p>
                </div>

                <!-- BODY -->
                <div class="px-6 py-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        <!-- ROLE ID -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Role ID
                            </p>
                            <p class="text-xl font-bold text-white">
                                {{ $userrole['role_id'] }}
                            </p>
                        </div>

                        <!-- ROLE TITLE -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Role Title
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $userrole['role_title'] }}
                            </p>
                        </div>

                        <!-- USER ID -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                User ID
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $userrole['UserProfile_user_id'] }}
                            </p>
                        </div>

                        <!-- UNIVERSITY ID -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                University ID
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $userrole['UserProfile_University_id'] }}
                            </p>
                        </div>

                    </div>
                </div>

                <!-- FOOTER -->
                <div class="px-6 py-5 border-t border-slate-700 flex justify-between items-center">

                    <a href="{{ route('userrole.index') }}"
                       class="px-5 py-2 bg-slate-700 text-white rounded-lg font-semibold
                              hover:bg-slate-600 transition">
                        ← Back to List
                    </a>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>
