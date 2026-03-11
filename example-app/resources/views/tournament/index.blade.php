<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Competition Results
        </h2>
    </x-slot>

    <!-- PAGE BACKGROUND -->
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-7xl mx-auto xs:px-6 lg:px-8">

            <!-- MAIN CARD -->
            <div class="bg-slate-800 rounded-2xl shadow-xl">

                <!-- HEADER -->
                <div class="px-6 py-5 border-b border-slate-700 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-semibold text-white">
                            List of Results and Placements
                        </h3>
                    </div>

                    <a href="{{ route('tournament.create') }}"
                       class="px-4 py-2 bg-red-600 text-white rounded-lg font-semibold
                              hover:bg-red-700 transition">
                        + Add Tournament Result
                    </a>
                </div>

                <!-- TABLE -->
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">

                        <!-- TABLE HEAD -->
                        <thead class="bg-slate-700">
                            <tr>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">
                                    Swimmer ID
                                </th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">
                                    Date
                                </th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">
                                    Location
                                </th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">
                                    Event
                                </th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">
                                    Result
                                </th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">
                                    Place
                                </th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <!-- TABLE BODY -->
                        <tbody class="divide-y divide-slate-700">
                            @foreach ($tournament as $t)
                            <tr class="hover:bg-slate-700 transition">

                                <td class="p-4 font-semibold text-white">
                                    {{ $t->a_record_swimmer_id }}
                                </td>

                                <td class="p-4 text-slate-200">
                                    {{ $t->T_date }}
                                </td>

                                <td class="p-4 text-slate-200">
                                    {{ $t->T_location }}
                                </td>

                                <td class="p-4 text-slate-200">
                                    {{ $t->T_event }}
                                </td>

                                <td class="p-4 text-slate-200">
                                    {{ $t->T_result }}
                                </td>

                                <td class="p-4 text-slate-200">
                                    {{ $t->T_Place }}
                                </td>

                                <!-- ACTIONS -->
                                <td class="p-4 space-x-3 font-semibold">
                                    <a href="{{ route('tournament.show', $t->a_record_swimmer_id) }}"
                                       class="text-red-400 hover:underline">
                                        Show
                                    </a>

                                    <a href="{{ route('tournament.edit', $t->a_record_swimmer_id) }}"
                                       class="text-red-400 hover:underline">
                                        Edit
                                    </a>

                                    <form action="{{ route('tournament.destroy', $t->a_record_swimmer_id) }}"
                                          method="POST"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                onclick="return confirm('Are you sure you want to delete this data?')"
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

