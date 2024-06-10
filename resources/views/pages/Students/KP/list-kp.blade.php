<x-app-layout>
    @include('partials.header')

    <div class="py-12 px-8">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                <thead class="ltr:text-left rtl:text-right">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Location</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Proof Application</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Date</th>

                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @if ($kps->isNotEmpty())
                        @foreach ($kps as $kp)
                            <tr class="text-center">
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    {{ $kp->locationName }}
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700 flex justify-center items-center">
                                    @php
                                        $fileExtension = pathinfo($kp->locationProof, PATHINFO_EXTENSION);
                                    @endphp

                                    @if (in_array($fileExtension, ['png', 'jpg', 'jpeg', 'gif']))
                                        <img src="{{ asset('uploads/kpslocation/' . $kp->locationProof) }}"
                                            alt="Image" class="w-20 h-20">
                                    @elseif($fileExtension === 'pdf')
                                        <a href="{{ asset('uploads/kpslocation/' . $kp->locationProof) }}"
                                            target="_blank">
                                            <i class="fa-solid fa-file-pdf text-red-800 text-3xl"></i>
                                        </a>
                                    @endif

                                    <a href="{{ asset('uploads/kpslocation/' . $kp->locationProof) }}" download
                                        class="ml-2 text-blue-600 hover:text-blue-800">
                                        Download
                                    </a>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $kp->locationStatus }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $kp->created_at }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="w-full h-20 text-center">
                            <td colspan="6" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Not created
                                location kp yet</td>
                        </tr>
                    @endif
                </tbody>

            </table>
        </div>
    </div>
</x-app-layout>
