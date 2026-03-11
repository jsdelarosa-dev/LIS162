<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            Edit Announcement
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
                        Announcement Information
                    </h3>
                    <p class="text-sm text-slate-400">
                        Update meeting details and information
                    </p>
                </div>

                <!-- FORM -->
                <form action="{{ route('announcement.update', ['vst_announcement' => $vst_announcement->announcement_id]) }}"
                      method="POST">
                    @csrf
                    @method('PUT')

                    <div class="px-6 py-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                            <!-- ANNOUNCEMENT ID -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Announcement ID
                                </label>
                                <input
                                    type="text"
                                    name="announcement_id"
                                    value="{{ old('announcement_id', $vst_announcement->announcement_id) }}"
                                    class="w-full bg-transparent border-none text-white text-xl font-bold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- MEETING DATE -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Meeting Date
                                </label>
                                <input
                                    type="text"
                                    name="meeting_date"
                                    value="{{ old('meeting_date', $vst_announcement->meeting_date) }}"
                                    class="w-full bg-transparent border-none text-white text-xl font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- MEETING LOCATION -->
                            <div class="bg-red-700 p-5 rounded-xl">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Meeting Location
                                </label>
                                <input
                                    type="text"
                                    name="meeting_location"
                                    value="{{ old('meeting_location', $vst_announcement->meeting_location) }}"
                                    class="w-full bg-transparent border-none text-white text-xl font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                            <!-- MEETING DETAILS -->
                            <div class="bg-red-700 p-5 rounded-xl sm:col-span-2">
                                <label class="block text-xs uppercase text-white mb-1">
                                    Meeting Details
                                </label>
                                <input
                                    type="text"
                                    name="meeting_details"
                                    value="{{ old('meeting_details', $vst_announcement->meeting_details) }}"
                                    class="w-full bg-transparent border-none text-white text-xl font-semibold focus:ring-0"
                                    required
                                >
                            </div>

                        </div>
                    </div>

                    <!-- FOOTER -->
                    <div class="px-6 py-5 border-t border-slate-700 flex justify-between items-center">

                        <a href="{{ route('announcement.index') }}"
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


