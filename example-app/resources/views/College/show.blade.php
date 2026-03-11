<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            College Details
        </h2>
    </x-slot>

    <!-- PAGE BACKGROUND -->
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <!-- MAIN CARD -->
            <div class="bg-gray-800 rounded-2xl shadow-xl">

                <!-- HEADER -->
                <div class="px-6 py-5 border-b border-gray-700">
                    <h3 class="text-lg font-semibold text-white">
                        College Information
                    </h3>
                    <p class="text-sm text-slate-400">
                        Student-Athlete Details
                    </p>
                </div>

                <!-- BODY -->
                <div class="px-6 py-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        <!-- UNIVERSITY ID -->
                        <div class="bg-red-700 p-5 rounded-xl border border-red-700">
                            <p class="text-xs uppercase text-white mb-1">
                                College ID
                            </p>
                            <p class="text-xl font-bold text-white">
                                {{ $college->University_id }}
                            </p>
                        </div>

                        <!-- COLLEGE NAME -->
                        <div class="bg-red-700 p-5 rounded-xl border border-red-700">
                            <p class="text-xs uppercase text-white mb-1">
                                College Name
                            </p>
                            <p class="text-xl font-semibold text-white">
                                {{ $college->college_name }}
                            </p>
                        </div>

                        <!-- COURSE -->
                        <div class="bg-red-700 p-5 rounded-xl border border-red-700 sm:col-span-2">
                            <p class="text-xs uppercase text-white mb-1">
                                Course
                            </p>
                            <p class="text-xl font-semibold text-white">
                                {{ $college->course }}
                            </p>
                        </div>

                    </div>
                </div>

                <!-- FOOTER -->
                <div class="px-6 py-5 border-t border-gray-700 flex justify-between items-center">

                    <a href="{{ route('college.index') }}"
                       class="px-5 py-2 bg-gray-600 text-white rounded-lg font-semibold
                              hover:bg-gray-700 transition">
                        ← Back to List
                    </a>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>



