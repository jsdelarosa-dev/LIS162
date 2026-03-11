<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            General Meetings & Announcements
        </h2>
    </x-slot>

    <!-- PAGE BACKGROUND -->
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- MAIN CARD -->
            <div class="bg-slate-800 rounded-2xl shadow-xl overflow-hidden">

                <!-- HEADER -->
                <div class="flex justify-between items-center px-6 py-5 border-b border-slate-700">
                    <div>
                        <h3 class="text-xl font-semibold text-white">
                            List of Dates and Details
                        </h3>
                    </div>

                    <a href="{{ route('announcement.create') }}"
                       class="px-5 py-2 bg-red-600 text-white rounded-lg font-semibold
                              hover:bg-red-700 transition">
                        + Add Latest News
                    </a>
                </div>

                <!-- TABLE -->
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">

                        <!-- TABLE HEAD -->
                        <thead class="bg-slate-700 text-xs uppercase text-slate-300">
                            <tr>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">Announcement ID</th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">Meeting Date</th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">Location</th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">Details</th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">Actions</th>
                            </tr>
                        </thead>

                        <!-- TABLE BODY -->
                        <tbody class="divide-y divide-slate-700">
                            @foreach ($vst_announcement as $v)
                            <tr class="hover:bg-slate-700/50 transition">

                                <td class="p-4 font-semibold text-white">
                                    {{ $v->announcement_id }}
                                </td>

                                <td class="p-4 text-slate-200">
                                    {{ $v->meeting_date }}
                                </td>

                                <td class="p-4 text-slate-200">
                                    {{ $v->meeting_location }}
                                </td>

                                <td class="p-4 text-slate-200">
                                    {{ $v->meeting_details }}
                                </td>

                                <td class="p-4 space-x-4 whitespace-nowrap">

                                    <a href="{{ route('announcement.show', $v->announcement_id) }}"
                                       class="text-red-400 font-semibold hover:underline">
                                        Show
                                    </a>

                                    <a href="{{ route('announcement.edit', $v->announcement_id) }}"
                                       class="text-red-400 font-semibold hover:underline">
                                        Edit
                                    </a>

                                    <form action="{{ route('announcement.destroy', $v->announcement_id) }}"
                                          method="POST"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this announcement?')"
                                            class="text-red-400 font-semibold hover:underline">
                                            Delete
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>

