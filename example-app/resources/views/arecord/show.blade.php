<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Swimmer Details
        </h2>
    </x-slot>

    <!-- Dark background wrapper -->
    <div class="min-h-screen bg-gray-900 py-12">
        <div class="max-w-5xl mx-auto px-6">

            <!-- Main Card -->
            <div class="bg-gray-800 rounded-2xl shadow-xl overflow-hidden">

                <!-- Card Header -->
                <div class="px-8 py-6 border-b border-gray-700">
                    <h3 class="text-xl font-semibold text-white">
                        Swimmer Information
                    </h3>
                    <p class="text-sm text-gray-400">
                        Athlete record details
                    </p>
                </div>

                <!-- Card Body -->
                <div class="px-8 py-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                        <!-- Swimmer ID -->
                        <div class="bg-red-700 rounded-xl p-6">
                            <p class="text-xs uppercase tracking-wider text-red-200 mb-1">
                                Swimmer ID
                            </p>
                            <p class="text-xl font-bold text-white">
                                {{ $arecord->swimmer_id }}
                            </p>
                        </div>

                        <!-- Main Stroke -->
                        <div class="bg-red-700 rounded-xl p-6">
                            <p class="text-xs uppercase tracking-wider text-red-200 mb-1">
                                Main Stroke
                            </p>
                            <p class="text-xl font-bold text-white">
                                {{ $arecord->main_stroke }}
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Card Footer -->
                <div class="px-8 py-6 border-t border-gray-700">
                    <a href="{{ route('arecord.index') }}"
                       class="inline-flex items-center px-5 py-2.5 bg-gray-600 text-white rounded-lg font-semibold
                              hover:bg-gray-500 transition">
                        ← Back to List
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

