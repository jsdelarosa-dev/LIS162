<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            UPVST Database Dashboard
        </h2>
    </x-slot>

    <!-- Page Background -->
    <div class="py-10 bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Section -->
            <div class="bg-gray-800 p-6 rounded-xl shadow-lg mb-10 border border-gray-800">
                <h3 class="text-xl font-semibold text-white mb-1">
                    Welcome to the UPVST Web Database
                </h3>
                <p class="text-gray-400 text-sm">
                    Select a module below to manage information and records.
                </p>
            </div>

            <!-- Navigation Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- College -->
                <a href="{{ route('college.index') }}"
                   class="group bg-gray-800 p-6 rounded-xl shadow-lg
                          hover:shadow-2xl hover:border-red-600
                          transition border border-gray-800">
                    <h4 class="font-semibold text-lg mb-1 text-white">
                        Student-Athlete Records
                    </h4>
                    <p class="text-sm text-gray-400">
                        List of college information and courses.
                    </p>
                </a>

                <!-- Swimmer Records -->
                <a href="{{ route('arecord.index') }}"
                   class="group bg-gray-800 p-6 rounded-xl shadow-lg
                          hover:shadow-2xl hover:border-red-600
                          transition border border-gray-800">
                    <h4 class="font-semibold text-lg mb-1 text-white">
                        Swimmer Details
                    </h4>
                    <p class="text-sm text-gray-400">
                        Main Stroke and Student No.
                    </p>
                </a>

                <!-- Announcements -->
                <a href="{{ route('announcement.index') }}"
                   class="group bg-gray-800 p-6 rounded-xl shadow-lg
                          hover:shadow-2xl hover:border-red-600
                          transition border border-gray-800">
                    <h4 class="font-semibold text-lg mb-1 text-white">
                        General Meetings
                    </h4>
                    <p class="text-sm text-gray-400">
                        Team updates and announcements.
                    </p>
                </a>

                <!-- Training Logs -->
                <a href="{{ route('attendance.index') }}"
                   class="group bg-gray-800 p-6 rounded-xl shadow-lg
                          hover:shadow-2xl hover:border-red-600
                          transition border border-gray-800">
                    <h4 class="font-semibold text-lg mb-1 text-white">
                        Training Logs
                    </h4>
                    <p class="text-sm text-gray-400">
                        Daily attendance and workout logs.
                    </p>
                </a>

                <!-- Tournament Results -->
                <a href="{{ route('tournament.index') }}"
                   class="group bg-gray-800 p-6 rounded-xl shadow-lg
                          hover:shadow-2xl hover:border-red-600
                          transition border border-gray-800">
                    <h4 class="font-semibold text-lg mb-1 text-white">
                        Competition Results
                    </h4>
                    <p class="text-sm text-gray-400">
                        Meet results and swimmer achievements.
                    </p>
                </a>

                <!-- Users -->
                <a href="{{ route('userrole.index') }}"
                   class="group bg-gray-800 p-6 rounded-xl shadow-lg
                          hover:shadow-2xl hover:border-red-600
                          transition border border-gray-800">
                    <h4 class="font-semibold text-lg mb-1 text-white">
                        Users
                    </h4>
                    <p class="text-sm text-gray-400">
                        Manage system users and access roles.
                    </p>
                </a>

                <!-- Team Roster -->
                <a href="{{ route('userprofile.index') }}"
                   class="group bg-gray-800 p-6 rounded-xl shadow-lg
                          hover:shadow-2xl hover:border-red-600
                          transition border border-gray-800">
                    <h4 class="font-semibold text-lg mb-1 text-white">
                        Team Roster
                    </h4>
                    <p class="text-sm text-gray-400">
                        List of all active UPVST swimmers.
                    </p>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>



