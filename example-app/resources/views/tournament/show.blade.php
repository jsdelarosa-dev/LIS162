<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Tournament Result Details
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
                        Tournament Information
                    </h3>
                    <p class="text-sm text-slate-400">
                        Recorded competition performance
                    </p>
                </div>

                <!-- BODY -->
                <div class="px-6 py-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        <!-- SWIMMER ID -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Swimmer ID
                            </p>
                            <p class="text-xl font-bold text-white">
                                {{ $tournament['a_record_swimmer_id'] }}
                            </p>
                        </div>

                        <!-- DATE -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Tournament Date
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $tournament['T_date'] }}
                            </p>
                        </div>

                        <!-- LOCATION -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Tournament Location
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $tournament['T_location'] }}
                            </p>
                        </div>

                        <!-- EVENT -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Tournament Event
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $tournament['T_event'] }}
                            </p>
                        </div>

                        <!-- RESULT -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Tournament Result
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $tournament['T_result'] }}
                            </p>
                        </div>

                        <!-- PLACE -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Tournament Place
                            </p>
                            <p class="text-lg font-semibold text-white">
                                {{ $tournament['T_Place'] }}
                            </p>
                        </div>

                    </div>
                </div>

                <!-- FOOTER -->
                <div class="px-6 py-5 border-t border-slate-700 flex justify-between items-center">

                    <a href="{{ route('tournament.index') }}"
                       class="px-5 py-2 bg-slate-700 text-white rounded-lg font-semibold
                              hover:bg-slate-600 transition">
                        ← Back to List
                    </a>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>

