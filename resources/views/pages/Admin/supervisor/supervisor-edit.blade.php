<x-admin-layout>

    <div class="mx-auto max-w-screen-xl py-8">
        {{-- px-4 py-16 sm:px-6 lg:px-8 --}}
        <div class="mx-auto w-full">
            <h1 class="text-2xl font-bold sm:text-3xl">Edit Supervisor Data</h1>

            <p class="mt-2 text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br /> Et libero nulla eaque error neque
                ipsa culpa autem, at itaque nostrum!
            </p>
        </div>

        <form action="{{ route('admin.supervisor.edit.process', ['supervisedId' => $supervisor->alocId]) }}"
            method="post" class="mx-auto mb-0 mt-8 w-full space-y-4">
            @method('PUT')
            @csrf
            <div class="w-full flex flex-col gap-y-4">
                <div class="w-full">
                    <label for="alocName" class="sr-only">alocName</label>
                    <div class="relative">
                        <input type="text" name="alocName" value="{{ old('alocName', $supervisor->alocName) }}"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Supervisor Title" />
                    </div>
                </div>
                <div class="w-full">
                    <label for="alocStudent" class="sr-only">Student Data</label>

                    <div class="relative">
                        <select name="alocStudent" id="alocStudent"
                            class="w-full rounded-lg border-gray-200 px-4 py-3 pe-12 text-sm shadow-sm">
                            <option value="{{ old('alocStudent', $supervisor->students->studentId) }}">
                                <div class="flex gap-2">
                                    <p>{{ $supervisor->students->studentName }}</p>
                                    <p> NIM :{{ $supervisor->students->studentNim }}</p>
                                    <p> MAJOR: {{ $supervisor->students->studentProdi }}</p>
                                    <p> SEMESTER : {{ $supervisor->students->studentSemester }} </p>
                                    <p> NUMBER OF CREDITS : {{ $supervisor->students->studentSKS }}</p>
                                </div>
                            </option>
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
                <div class="w-full">
                    <label for="alocSupervisor" class="sr-only">Lecture Data</label>

                    <div class="relative">
                        <select name="alocSupervisor" id="alocSupervisor"
                            class="w-full rounded-lg border-gray-200 px-4 py-3 pe-12 text-sm shadow-sm">
                            <option class="text-base" value="{{ old('alocSupervisor', $supervisor->students->lectureId) }}">
                                <div class="flex gap-2">
                                    <p>{{ $supervisor->lectures->lectureName }}</p>
                                    <p> Department : {{ $supervisor->lectures->lectureDepartment }}</p>
                                </div>
                            </option>
                            @foreach ($lectures as $lecture)
                                <option value="{{ $lecture->lectureId }}" class="text-base">
                                    <div class="flex gap-2">
                                        <p>{{ $lecture->lectureName }} </p>
                                        <p> Department : {{ $lecture->lectureDepartment }} </p>
                                    </div>
                                </option>
                            @endforeach
                        </select>
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
