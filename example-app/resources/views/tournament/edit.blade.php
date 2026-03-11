<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Edit Tournament Result
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
                        Update recorded tournament performance
                    </p>
                </div>

                <!-- FORM -->
                <form action="{{ route('tournament.update', $tournament->a_record_swimmer_id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="px-6 py-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                            <!-- SWIMMER ID -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Swimmer ID
                                </label>
                                <input
                                    type="text"
                                    name="a_record_swimmer_id"
                                    value="{{ $tournament->a_record_swimmer_id }}"
                                    class="w-full bg-transparent border-none text-white text-xl font-bold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- DATE -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Tournament Date
                                </label>
                                <input
                                    type="text"
                                    name="T_date"
                                    value="{{ $tournament->T_date }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- LOCATION -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Tournament Location
                                </label>
                                <input
                                    type="text"
                                    name="T_location"
                                    value="{{ $tournament->T_location }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- EVENT -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Tournament Event
                                </label>
                                <input
                                    type="text"
                                    name="T_event"
                                    value="{{ $tournament->T_event }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- RESULT -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Tournament Result
                                </label>
                                <input
                                    type="text"
                                    name="T_result"
                                    value="{{ $tournament->T_result }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- PLACE -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Tournament Place
                                </label>
                                <input
                                    type="text"
                                    name="T_Place"
                                    value="{{ $tournament->T_Place }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                        </div>
                    </div>

                    <!-- FOOTER -->
                    <div class="px-6 py-5 border-t border-slate-700 flex justify-between items-center">

                        <a href="{{ route('tournament.index') }}"
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

