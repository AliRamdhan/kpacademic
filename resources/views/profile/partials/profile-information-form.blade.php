<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        {{-- <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p> --}}
    </header>
    <div class="mt-6 space-y-6">
        @if ($students && $students->students)
            <div class="w-full flex gap-8">
                <div class="flex-1">
                    <x-input-label for="name" :value="__('Full Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('studentName', $students->students->studentName)"
                        disabled autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div class="flex-1">
                    <x-input-label for="email" :value="__('Student NIM')" />
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                        :value="old('studentNim', $students->students->studentNim)" disabled autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
            </div>
            <div class="w-full flex gap-8">
                <div class="flex-1">
                    <x-input-label for="name" :value="__('Full Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                        :value="old('studentProdi', $students->students->studentProdi)" disabled autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div class="flex-1">
                    <x-input-label for="email" :value="__('Student NIM')" />
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                        :value="old('studentSKS', $students->students->studentSKS)" disabled autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <div class="flex-1">
                    <x-input-label for="email" :value="__('Student NIM')" />
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                        :value="old('studentSemester', $students->students->studentSemester)" disabled autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
            </div>
        @else
            <p>data not found</p>
        @endif
    </div>

    <div class="mt-6">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Student Supervisor Lecture') }}
        </h2>

        <p class=" text-sm text-gray-600 dark:text-gray-400">
            {{ __('Your supervisor information.') }}
        </p>
    </div>
    <div class="mt-6 space-y-6">
        @if ($supervisors->isNotEmpty())
            @foreach ($supervisors as $supervisor)
                {{-- <p>{{ $supervisor->alocName }}</p> --}}

                <div class="w-full">
                    {{-- <x-input-label for="name" :value="__('Full Name')" /> --}}
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                        :value="old('alocName', $supervisor->alocName)" disabled autofocus autocomplete="name" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                        :value="old('studentName', $supervisor->lectures->lectureName)" disabled autofocus autocomplete="name" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                        :value="old('lectureName', $supervisor->lectures->lectureDepartment)" disabled autofocus autocomplete="name" />
                    {{-- <x-input-error class="mt-2" :messages="$errors->get('name')" /> --}}
                </div>
            @endforeach
        @else
            <p>Not found data</p>
        @endif
    </div>
</section>
