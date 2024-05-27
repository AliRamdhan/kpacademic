<x-lecture-layout>
    <div class="w-full py-2">
        <div>
            <div class="text-gray-900">
                <div class="w-full flex justify-between py-4 border-b-2">
                    <div class="px-4">
                        @if ($recognitions)
                            <p class="text-3xl font-bold">Report of {{$recognitions->recognitionId}} by {{$recognitions->user->name}}</p>
                        @endif
                    </div>
                </div>
                <div class="w-fulloverflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Title</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Content</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Date</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @if ($reports->isNotEmpty())
                                @foreach ($reports as $report)
                                    <tr class="text-center">
                                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                            {{ $report->reportTitle }}</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            Content</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $report->reportDate }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="w-full h-20 text-center">
                                    <td colspan="3" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Not
                                        create
                                        reports yet</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-lecture-layout>
