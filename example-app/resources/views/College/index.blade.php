<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Student-Athlete Records
        </h2>
    </x-slot>

    <!-- Dark Background Wrapper -->
    <div class="py-10 min-h-screen bg-gradient-to-b from-slate-900 to-slate-950">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Red Container -->
            <div class="bg-gray-800 rounded-2xl shadow-xl">

                <!-- Header -->
                <div class="px-6 py-5 border-b border-gray-800 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-semibold text-white">
                            List of Students and Colleges 
                        </h3>
                    </div>

                    <a href="{{ route('college.create') }}"
                       class="px-5 py-2.5 bg-red-600 hover:bg-red-700
                              text-white rounded-lg font-semibold transition">
                        + Add Student-Athlete
                    </a>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead class="bg-gray-700">
                            <tr>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">
                                    Student Number 
                                </th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">
                                    College 
                                </th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">
                                    Course
                                </th>
                                <th class="p-4 text-left text-xs font-semibold uppercase text-white">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-700">
                            @foreach ($colleges as $c)
                                <tr class="hover:bg-gray-700 transition">
                                    <td class="p-4 font-semibold text-white">
                                        {{ $c->University_id }}
                                    </td>

                                    <td class="p-4 text-white">
                                        {{ $c->college_name }}
                                    </td>

                                    <td class="p-4 text-white">
                                        {{ $c->course }}
                                    </td>

                                    <td class="p-4 space-x-3 font-semibold">
                                        <a href="{{ route('college.show', $c->University_id) }}"
                                           class="text-red-400 hover:underline">
                                            Show
                                        </a>

                                        <a href="{{ route('college.edit', $c->University_id) }}"
                                           class="text-red-400 hover:underline">
                                            Edit
                                        </a>

                                        <form action="{{ route('college.destroy', $c->University_id) }}"
                                              method="POST"
                                              class="inline">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
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


