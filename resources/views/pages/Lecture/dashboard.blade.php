<x-lecture-layout>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Profile Information') }}
            </h2>

            {{-- <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __("Update your account's profile information and email address.") }}
            </p> --}}
        </header>
        <div class="mt-6 space-y-6">
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Account Information') }}
            </h2>
            <div class="w-full flex gap-8">
                <div class="flex-1">
                    <p>Username</p>
                    <div class="p-2 border rounded-lg">{{ $user->name }}</div>
                </div>

                <div class="flex-1">
                    <p>Email</p>
                    <div class="p-2 border rounded-lg">{{ $user->email }}</div>
                </div>
                <div class="flex-1">
                    <p>Role</p>
                    <div class="p-2 border rounded-lg">{{ $user->roles->name }}</div>
                </div>
            </div>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Information') }}
            </h2>
            <div class="w-full flex gap-8">
                <div class="flex-1">
                    <p>Full Name</p>
                    <div class="p-2 border rounded-lg">{{ $user->lectures->lectureName }}</div>
                </div>
                <div class="flex-1">
                    <p>Department</p>
                    <div class="p-2 border rounded-lg">{{ $user->lectures->lectureDepartment }}</div>
                </div>
            </div>
        </div>
    </section>

</x-lecture-layout>
