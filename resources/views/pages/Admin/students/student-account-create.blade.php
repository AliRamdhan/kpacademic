<x-admin-layout>

    <div class="mx-auto max-w-screen-xl py-8">
        {{-- px-4 py-16 sm:px-6 lg:px-8 --}}
        <div class="mx-auto w-full">
            <h1 class="text-2xl font-bold sm:text-3xl">Create Student Account</h1>

            <p class="mt-2 text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br /> Et libero nulla eaque error neque
                ipsa culpa autem, at itaque nostrum!
            </p>
        </div>

        <form action="{{ route('admin.student.account.create.process')}}" method="post"
            class="mx-auto mb-0 mt-8 w-full space-y-4">
            @csrf
            <div class="w-full flex flex-col gap-y-4">
                <div class="w-full flex flex-col lg:flex-row gap-x-4">
                    <div class="flex-1">
                        <label for="name" class="sr-only">Name</label>
                        <div class="relative">
                            <input type="text" name="name"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                placeholder="Student Username" />
                        </div>
                    </div>
                    <div class="flex-1">
                        <label for="email" class="sr-only">email</label>
                        <div class="relative">
                            <input type="email" name="email"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                placeholder="Student Email" />

                            <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <label for="studentId" class="sr-only">Student Data</label>

                    <div class="relative">
                        <select name="studentId" id="studentId"
                            class="w-full rounded-lg border-gray-200 px-4 py-3 pe-12 text-sm shadow-sm">
                            <option value="">Select Student</option>
                            @foreach ($students as $student)
                                <option value="{{ $student->studentId }}" class="text-base">
                                    <div class="flex gap-2">
                                        <p>{{ $student->studentName }} </p>
                                        <p> NIM : {{ $student->studentNim }} </p>
                                        <p> MAJOR: {{ $student->studentProdi }}</p>
                                        <p> SEMESTER : {{ $student->studentSemester }} </p>
                                        <p> NUMBER OF CREDITS : {{ $student->studentSKS }}</p>
                                    </div>
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <div class="w-full flex flex-col lg:flex-row gap-x-4">
                        <div class="flex-1">
                            <label for="password" class="sr-only">password</label>
                            <div class="relative">
                                <input type="password" name="password" id="password"
                                    class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                    placeholder="Student Password" />

                                <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="flex-1">
                            <label for="password_confirmation" class="sr-only">password</label>
                            <div class="relative">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                    placeholder="Student Confirmation Password" />

                                <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-x-4 pt-4">
                    <div></div>
                    <div class="w-full flex justify-end">
                        <button type="submit"
                            class="w-1/2 inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
                            Submit
                        </button>
                    </div>
                </div>
        </form>
    </div>
</x-admin-layout>
