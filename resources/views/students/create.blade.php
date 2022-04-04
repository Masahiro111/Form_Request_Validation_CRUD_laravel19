<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Student Create Page') }}
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

                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('students.store') }}">
                        @csrf

                        <!-- Fullname -->
                        <div class="mb-4 lg:w-1/3 mx-auto">
                            <x-label for="fullname" :value="__('Fullname')" />
                            <x-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus />
                            @error('fullname')
                            <p><span class="text-red-500">{{ $message }}</span></p>
                            @enderror
                        </div>
                        <!-- email -->
                        <div class="mb-4 lg:w-1/3 mx-auto">
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            @error('email')
                            <p><span class="text-red-500">{{ $message }}</span></p>
                            @enderror
                        </div>
                        <!-- Phone -->
                        <div class="mb-4 lg:w-1/3 mx-auto">
                            <x-label for="phone" :value="__('Phone')" />
                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
                            @error('phone')
                            <p><span class="text-red-500">{{ $message }}</span></p>
                            @enderror
                        </div>
                        <!-- Fullname -->
                        <div class="mb-6 lg:w-1/3 mx-auto">
                            <x-label for="course" :value="__('Course')" />
                            <x-input id="course" class="block mt-1 w-full" type="text" name="course" :value="old('course')" required autofocus />
                            @error('course')
                            <p><span class="text-red-500">{{ $message }}</span></p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end mt-4 lg:w-1/3 mx-auto">
                            <x-button class="ml-3">
                                {{ __('Submit') }}
                            </x-button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>