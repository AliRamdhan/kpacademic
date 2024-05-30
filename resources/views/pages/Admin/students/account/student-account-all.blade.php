<x-admin-layout>
    <div class="w-full py-2">
        <div>
            <div class="text-gray-900">
                <div class="w-full flex justify-between py-4 border-b-2">
                    <div class="px-4">
                        <p class="text-3xl font-bold">List All Student Account</p>
                    </div>
                    {{-- <div>
                        <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                            href="{{ route('admin.student.account.create') }}">
                            Create Student Account
                        </a>
                    </div> --}}
                </div>
                <div class="w-full py-4 overflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Account Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Email</th>
                                {{-- <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Full Name</th> --}}
                                {{-- <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">NIM</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Prodi</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Semester</th> --}}
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr class="text-center">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $user->name }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $user->email }}</td>
                                    {{-- <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $user->students->studentName }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $user->students->studentNim }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $user->students->studentProdi }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $user->students->studentSemester }}</td> --}}
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 flex gap-2">
                                        <a class="inline-block rounded border border-indigo-600 bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                                            href="{{ route('admin.student.account.edit', ['account' => $user->id]) }}">
                                            Edit
                                        </a>
                                        <form
                                            action="{{ route('admin.student.account.delete.process', ['account' => $user->id]) }}"
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
