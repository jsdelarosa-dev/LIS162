<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            Edit College
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
                        College Information
                    </h3>
                    <p class="text-sm text-slate-400">
                        Update academic affiliation record
                    </p>
                </div>

                <!-- FORM -->
                <form action="{{ route('college.update', $college->University_id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="px-6 py-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                            <!-- COLLEGE ID -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    College ID
                                </label>
                                <input
                                    type="text"
                                    name="University_id"
                                    value="{{ $college->University_id }}"
                                    class="w-full bg-transparent border-none text-white text-xl font-bold focus:ring-0"
                                >
                            </div>

                            <!-- COLLEGE NAME -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    College Name
                                </label>
                                <input
                                    type="text"
                                    name="college_name"
                                    value="{{ $college->college_name }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                >
                            </div>

                            <!-- COURSE -->
                            <div class="bg-red-700 p-5 rounded-xl sm:col-span-2">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Course
                                </label>
                                <input
                                    type="text"
                                    name="course"
                                    value="{{ $college->course }}"
                                    class="w-full bg-transparent border-none text-white text-lg font-semibold focus:ring-0"
                                >
                            </div>

                        </div>
                    </div>

                    <!-- FOOTER -->
                    <div class="px-6 py-5 border-t border-slate-700 flex justify-between items-center">

                        <a href="{{ route('college.index') }}"
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



