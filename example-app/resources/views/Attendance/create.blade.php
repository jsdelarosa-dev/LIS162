<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            Add Training Session
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
                        Enter attendance and training details
                    </p>
                </div>

                <!-- FORM -->
                <form action="{{ route('attendance.store') }}" method="POST">
                    @csrf

                    <div class="px-6 py-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                            <!-- SESSION ID -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Session ID
                                </label>
                                <input
                                    type="text"
                                    name="session_id"
                                    value="{{ old('session_id') }}"
                                    class="w-full bg-transparent border-none text-white text-xl font-bold focus:ring-0"
                                    placeholder="Enter Session ID"
                                    required
                                >
                            </div>

                            <!-- TRAINING DATE -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Training Date
                                </label>
                                <input
                                    type="text"
                                    name="training_date"
                                    value="{{ old('training_date') }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    placeholder="YYYY-MM-DD"
                                    required
                                >
                            </div>

                            <!-- TRAINING TIME -->
                            <div class="bg-red-700 p-5 rounded-xl sm:col-span-2">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Training Time
                                </label>
                                <input
                                    type="text"
                                    name="training_time"
                                    value="{{ old('training_time') }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    placeholder="HH:MM:SS"
                                    required
                                >
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

                        <button
                            type="submit"
                            class="px-6 py-2 bg-red-600 text-white rounded-lg font-semibold
                                   hover:bg-red-700 transition">
                            Save Session
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>

