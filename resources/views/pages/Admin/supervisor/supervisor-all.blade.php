<x-admin-layout>
    <div class="w-full py-2">
        <div>
            <div class="text-gray-900">
                <div class="w-full flex justify-between py-4 border-b-2">
                    <div class="px-4">
                        <p class="text-3xl font-bold">List All Supervisor</p>
                    </div>
                    <div>
                        <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                            href="{{ route('admin.supervisor.create') }}">
                            Create Supervisor Student
                        </a>
                    </div>
                </div>
                <div class="py-4 overflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Supervisor Title</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Student Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Student NIM</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Student Prodi </th>
                                {{-- include semester --}}
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Lecture Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Lecture Department
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($supervisors as $supervisor)
                                <tr class="text-center">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $supervisor->alocName }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $supervisor->students->studentName }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $supervisor->students->studentNim }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $supervisor->students->studentProdi }} -
                                        smt({{ $supervisor->students->studentSemester }}) </td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $supervisor->lectures->lectureName }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $supervisor->lectures->lectureDepartment }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 flex gap-2">
                                        <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                                            href="{{ route('admin.supervisor.edit', ['supervisedId' => $supervisor->alocId]) }}">
                                            Edit
                                        </a>
                                        <form
                                            action="{{ route('admin.supervisor.delete.process', ['supervisedId' => $supervisor->alocId]) }}"
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <button
                                                class="inline-block rounded border border-indigo-600 bg-red-600 px-4 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
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
</x-admin-layout>
