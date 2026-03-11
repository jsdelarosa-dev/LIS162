<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Training Logs
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
                        <h3 class="text-lg font-semibold text-white">
                            Training Sessions
                        </h3>
                    </div>

                    <a href="{{ route('attendance.create') }}"
                       class="px-5 py-2 bg-red-600 text-white rounded-lg font-semibold
                              hover:bg-red-700 transition">
                        + Add Training Session
                    </a>
                </div>

                <!-- TABLE -->
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">

                        <!-- TABLE HEAD -->
                        <thead class="bg-slate-700 text-xs uppercase text-slate-300">
                            <tr>
                                <th class="p-4 text-left">Session ID</th>
                                <th class="p-4 text-left">Training Date</th>
                                <th class="p-4 text-left">Training Time</th>
                                <th class="p-4 text-left">Actions</th>
                            </tr>
                        </thead>

                        <!-- TABLE BODY -->
                        <tbody class="divide-y divide-slate-700">
                            @foreach ($record as $r)
                            <tr class="hover:bg-slate-700/50 transition">

                                <td class="p-4 font-semibold text-white">
                                    {{ $r->session_id }}
                                </td>

                                <td class="p-4 text-slate-200">
                                    {{ $r->training_date }}
                                </td>

                                <td class="p-4 text-slate-200">
                                    {{ $r->training_time }}
                                </td>

                                <td class="p-4 space-x-4 font-semibold whitespace-nowrap">

                                    <a href="{{ route('attendance.show', ['attendance' => $r->session_id]) }}"
                                       class="text-red-400 hover:underline">
                                        Show
                                    </a>

                                    <a href="{{ route('attendance.edit', ['attendance' => $r->session_id]) }}"
                                       class="text-red-400 hover:underline">
                                        Edit
                                    </a>

                                    <form method="POST"
                                          action="{{ route('attendance.destroy', ['attendance' => $r->session_id]) }}"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            onclick="return confirm('Are you sure you want to delete this data?')"
                                            class="text-red-400 hover:underline">
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

