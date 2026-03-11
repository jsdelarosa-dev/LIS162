<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Add Swimmer Record
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
                        Swimmer Information
                    </h3>
                </div>

                <!-- FORM -->
                <form action="{{ route('arecord.store') }}" method="POST">
                    @csrf

                    <div class="px-6 py-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                            <!-- SWIMMER ID -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Swimmer ID
                                </label>
                                <input
                                    type="text"
                                    name="swimmer_id"
                                    class="w-full bg-transparent border-none text-white text-xl font-bold focus:ring-0"
                                    placeholder="Enter Swimmer ID"
                                    required
                                >
                            </div>

                            <!-- MAIN STROKE -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Main Stroke
                                </label>
                                <input
                                    type="text"
                                    name="main_stroke"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                    placeholder="Enter Main Stroke"
                                    required
                                >
                            </div> 

                        </div>
                    </div>

                    <!-- FOOTER -->
                    <div class="px-6 py-5 border-t border-slate-700 flex justify-between items-center">

                        <a href="{{ route('arecord.index') }}"
                           class="px-5 py-2 bg-slate-700 text-white rounded-lg font-semibold
                                  hover:bg-slate-600 transition">
                            ← Back to List
                        </a>

                        <button
                            type="submit"
                            class="px-6 py-2 bg-red-600 text-white rounded-lg font-semibold
                                   hover:bg-red-700 transition">
                            Save Record
                        </button>

                    </div>
                </form>

            </div>

        </div>
    </div>
</x-app-layout>
