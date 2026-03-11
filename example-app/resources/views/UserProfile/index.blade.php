<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Team Roster
        </h2>
    </x-slot>

    <!-- PAGE BACKGROUND -->
    <div class="py-10 min-h-screen bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- MAIN CARD -->
            <div class="bg-slate-800 rounded-2xl shadow-xl">

                <!-- HEADER -->
                <div class="px-6 py-5 border-b border-slate-700 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-semibold text-white">
                            User Profiles
                        </h3>
                    </div>

                    <a href="{{ route('userprofile.create') }}"
                       class="px-4 py-2 bg-red-600 text-white rounded-lg font-semibold
                              hover:bg-red-700 transition">
                        + Add Profile
                    </a>
                </div>

                <!-- TABLE -->
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">

                        <thead class="bg-slate-700">
                            <tr>
                                <th class="p-4 text-left text-sm font-semibold uppercase text-white">
                                    User ID
                                </th>
                                <th class="p-4 text-left text-sm font-semibold uppercase text-white">
                                    Username
                                </th>
                                <th class="p-4 text-left text-sm font-semibold uppercase text-white">
                                    First Name
                                </th>
                                <th class="p-4 text-left text-sm font-semibold uppercase text-white">
                                    Last Name
                                </th>
                                <th class="p-4 text-left text-sm font-semibold uppercase text-white">
                                    Email
                                </th>
                                <th class="p-4 text-left text-sm font-semibold uppercase text-white">
                                    Age
                                </th>
                                <th class="p-4 text-left text-sm font-semibold uppercase text-white">
                                    Batch Year
                                </th>
                                <th class="p-4 text-left text-sm font-semibold uppercase text-white">
                                    Gender
                                </th>
                                <th class="p-4 text-left text-sm font-semibold uppercase text-white">
                                    University ID
                                </th>
                                <th class="p-4 text-left text-sm font-semibold uppercase text-white">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-slate-700">
                            @foreach ($userprofile as $u)
                            <tr class="hover:bg-slate-700 transition">

                                <td class="p-4 text-white font-medium">
                                    {{ $u->user_id }}
                                </td>

                                <td class="p-4 text-white">
                                    {{ $u->username }}
                                </td>

                                <td class="p-4 text-white">
                                    {{ $u->first_name }}
                                </td>

                                <td class="p-4 text-white">
                                    {{ $u->last_name }}
                                </td>

                                <td class="p-4 text-white">
                                    {{ $u->email }}
                                </td>

                                <td class="p-4 text-white">
                                    {{ $u->user_age }}
                                </td>

                                <td class="p-4 text-white">
                                    {{ $u->batch_year }}
                                </td>

                                <td class="p-4 text-white">
                                    {{ $u->Gender }}
                                </td>

                                <td class="p-4 text-white">
                                    {{ $u->University_id }}
                                </td>

                                <!-- ACTIONS -->
                                <td class="p-4 space-x-3 font-semibold">

                                    <a href="{{ route('userprofile.show', $u->user_id) }}"
                                       class="text-red-400 hover:underline">
                                        Show
                                    </a>

                                    <a href="{{ route('userprofile.edit', $u->user_id) }}"
                                       class="text-red-400 hover:underline">
                                        Edit
                                    </a>

                                    <form method="POST"
                                          action="{{ route('userprofile.destroy', $u->user_id) }}"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                onclick="return confirm('Are you sure you want to delete this profile?')"
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
