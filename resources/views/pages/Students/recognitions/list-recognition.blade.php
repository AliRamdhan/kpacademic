<x-app-layout>
    @include('partials.header')

    <div class="py-12 px-8">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                <thead class="ltr:text-left rtl:text-right">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Courses</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Reason</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">MBKM Courses</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Proof</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Date</th>

                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @if ($recognitions->isNotEmpty())
                        @foreach ($recognitions as $recognition)
                            <tr class="text-center">
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    {{ $recognition->Courses->coursesName }}
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    {{ $recognition->recognitionReason }}
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    {{ $recognition->MBKMCourses->mbkmCoursesName }} -
                                    {{ $recognition->MBKMCourses->mbkmCoursesDuration }}
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700 flex justify-center items-center">
                                    <img src="{{ asset('uploads/recognition/' . $recognition->recognitionProof) }}"
                                        alt="Proof Image" class="w-20 h-20">
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    {{ $recognition->recognitionStatus }}
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    {{ $recognition->recognitionDate }}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="w-full h-20 text-center">
                            <td colspan="6" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Not create
                                recognition yet</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
