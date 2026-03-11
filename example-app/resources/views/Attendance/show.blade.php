<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            Training Session Details
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
                        Training Session Information
                    </h3>
                    <p class="text-sm text-slate-400">
                        Attendance and training record
                    </p>
                </div>

                <!-- BODY -->
                <div class="px-6 py-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        <!-- SESSION ID -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Session ID
                            </p>
                            <p class="text-xl font-bold text-white">
                                {{ $record['session_id'] }}
                            </p>
                        </div>

                        <!-- TRAINING DATE -->
                        <div class="bg-red-700 p-5 rounded-xl">
                            <p class="text-xs uppercase text-white mb-1">
                                Training Date
                            </p>
                            <p class="text-xl font-semibold text-white">
                                {{ $record['training_date'] }}
                            </p>
                        </div>

                        <!-- TRAINING TIME -->
                        <div class="bg-red-700 p-5 rounded-xl sm:col-span-2">
                            <p class="text-xs uppercase text-white mb-1">
                                Training Time
                            </p>
                            <p class="text-xl font-semibold text-white">
                                {{ $record['training_time'] }}
                            </p>
                        </div>

                    </div>
                </div>

                <!-- FOOTER -->
                <div class="px-6 py-5 border-t border-slate-700 flex justify-between items-center">

                    <a href="{{ route('attendance.index') }}"
                       class="px-5 py-2 bg-slate-700 text-white rounded-lg font-semibold
                              hover:bg-slate-600 transition">
                        ← Back to List
                    </a>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>


