<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="flex content-center justify-between p-6 bg-white border-b border-gray-200">
                    {{-- You're logged in! --}}
                    <h4>Student Create Page.</h4>
                    <p>
                        <a
                           href="{{ route('students.index') }}"
                           class="items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25">
                            Back
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>