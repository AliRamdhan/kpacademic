<x-admin-layout>
    <div class="w-full py-2">
        <div>
            <div class="text-gray-900">
                <div class="p-4">
                    <p class="text-3xl font-bold">List All Courses Activity</p>
                </div>
                <div class="w-fulloverflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Course Name</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Number of Credits</th>

                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Course Lecturer</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Courses Date</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($courses as $courses)
                                <tr class="text-center">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                        {{ $courses->coursesName }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $courses->coursesSKS }} SKS</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $courses->coursesLecture }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                        {{ $courses->coursesDate }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>