<x-app-layout>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 sm:flex sm:items-center sm:justify-between">
        <div class="text-center sm:text-left">
            <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl">Your Reports</h1>
            <p class="mt-1.5 text-sm text-gray-500">Let's write your permission! </p>
        </div>

        <div class="mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center">
            <a href="{{ route('student.application.reports.form') }}">
                <button
                    class="w-56 block inline-flex items-center justify-center gap-1.5 rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring"
                    type="button">
                    Make your report
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </button>
            </a>
        </div>
    </div>

    <div x-data="{ tab: 'recognition' }" class="py-12 px-8">
        <div class="flex justify-center mb-4">
            <button :class="tab === 'recognition' ? 'bg-gray-900 text-white' : 'bg-gray-200 text-gray-900'"
                class="px-4 py-2 rounded-l-lg" @click="tab = 'recognition'">Report Recognition</button>
            <button :class="tab === 'location' ? 'bg-gray-900 text-white' : 'bg-gray-200 text-gray-900'"
                class="px-4 py-2 rounded-r-lg" @click="tab = 'location'">Report KP Location</button>
        </div>

        <div x-show="tab === 'recognition'">
            <div class="py-4">
                <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl">REPORT RECOGNITION</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Report Title
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Report Proof
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Report Date</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Recognition
                                Courses</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Recognition
                                Reason</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Recognition MBKM
                                Activity</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Recognition Date
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @if ($reportsRecognition->isNotEmpty())
                            @foreach ($reportsRecognition as $report)
                                <tr class="text-center h-16">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        {{ $report->reportTitle }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        <img src="{{ asset('uploads/reportapply/' . $report->reportProof) }}"
                                            alt="" srcset="">
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        {{ $report->reportDate }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        {{ $report->recognition->Courses->coursesName }} -
                                        {{ $report->recognition->Courses->coursesSKS }} SKS</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        {{ $report->recognition->recognitionReason }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        {{ $report->recognition->MBKMCourses->mbkmCoursesName }} -
                                        {{ $report->recognition->MBKMCourses->mbkmCoursesDuration }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        {{ $report->reportDate }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="w-full h-20 text-center">
                                <td colspan="6" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">You
                                    have not created any report recognitions yet</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <div x-show="tab === 'location'" x-cloak>
            <div class="py-4">
                <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl">REPORT KP LOCATION</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Report Title
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Report Proof
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Report Date</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Location Name
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Location Reason
                            </th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">Location Date
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @if ($reportsKP->isNotEmpty())
                            @foreach ($reportsKP as $report)
                                <tr class="text-center h-16">
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        {{ $report->reportTitle }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        <img src="{{ asset('uploads/reportapply/' . $report->reportProof) }}"
                                            alt="" srcset="">
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        {{ $report->reportDate }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        {{ $report->locationKP->locationName }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        {{ $report->locationKP->locationReason }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-base">
                                        {{ $report->locationKP->created_at }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="w-full h-20 text-center">
                                <td colspan="6" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">You
                                    have not created any report KP locations yet</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
