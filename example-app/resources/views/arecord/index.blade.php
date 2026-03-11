<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Swimmer Details 
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
                            List of Swimmers
                        </h3>
                    </div>

                    <a href="{{ route('arecord.create') }}"
                       class="px-5 py-2 bg-red-600 text-white rounded-lg font-semibold
                              hover:bg-red-700 transition">
                        + Add Swimmer
                    </a>
                </div> 

                <!-- TABLE -->
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">

                        <thead class="bg-slate-700 text-xs uppercase text-slate-300">
                            <tr>
                                <th class="p-4 text-left">Swimmer ID</th>
                                <th class="p-4 text-left">Main Stroke</th>
                                <th class="p-4 text-left">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-slate-700">
                            @foreach ($arecord as $a)
                            <tr class="hover:bg-slate-700/50 transition">

                                <td class="p-4 font-semibold text-white">
                                    {{ $a->swimmer_id }}
                                </td>

                                <td class="p-4 text-slate-200">
                                    {{ $a->main_stroke }}
                                </td>

                                <td class="p-4 space-x-4 font-semibold whitespace-nowrap">

                                    <a href="{{ route('arecord.show', $a->swimmer_id) }}"
                                       class="text-red-400 hover:underline">
                                        Show
                                    </a>

                                    <a href="{{ route('arecord.edit', $a->swimmer_id) }}"
                                       class="text-red-400 hover:underline">
                                        Edit
                                    </a>

                                    <form action="{{ route('arecord.destroy', $a->swimmer_id) }}"
                                          method="POST"
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





