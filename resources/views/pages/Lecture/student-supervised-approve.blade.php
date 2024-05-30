<x-lecture-layout>
    <div class="w-full py-2">
        <div>
            <div class="text-gray-900">
                <div class="w-full flex justify-between py-4 border-b-2">
                    <div class="px-4">
                        <p class="text-3xl font-bold">List Students</p>
                        @if (session('success'))
                            <div id="successMessage" class="absolute top-32 right-12 w-64 p-4 bg-green-200 rounded-xl">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
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
                            @if ($students->isNotEmpty())
                                @foreach ($students as $student)
                                    <tr class="text-center">
                                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                            {{ $student->students->studentName }}</td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $student->students->studentNim }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $student->students->studentProdi }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $student->students->studentSKS }}
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                            {{ $student->students->studentSemester }}</td>
                                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 flex gap-2">
                                            <form action="{{ route('lecture.supervise.student.approve.process',['aloc'=>$student->alocId]) }}"
                                                method="POST">
                                                @csrf
                                                <button
                                                    class="inline-block rounded border border-indigo-600 bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                                                    type="submit">Approve Supervise</button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="w-full h-20 text-center">
                                    <td colspan="6" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Not
                                        supervise student yet</td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-lecture-layout>
<script>
    function confirmApproval(locationId) {
        if (confirm("Are you sure you want to approve this location kp?")) {
            document.getElementById('approval-form').submit();
        }
    }
    setTimeout(function() {
        var successMessage = document.getElementById('successMessage');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 5000); // Adjust the time in milliseconds as needed
</script>
