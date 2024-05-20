<x-admin-layout>
    <div class="w-full py-2">
        <div>
            <div class="text-gray-900">
                <div class="p-4">
                    <p class="text-3xl font-bold">LIST ALL STUDENTS</p>
                </div>
                <div class="w-fulloverflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Departement</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Major</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">SKS</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Semester</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($students as $student)
                                <tr class="text-center">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$student->studentName}}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$student->studentNim}}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$student->studentProdi}}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$student->studentSKS}}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$student->studentSemester}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
