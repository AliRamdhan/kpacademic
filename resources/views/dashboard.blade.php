<x-app-layout>
    @include('partials.header')
    <section>
        <div class="max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="w-full h-80 flex justify-center items-center">
                <div class="mx-auto max-w-lg ltr:lg:text-left rtl:lg:text-right text-center">
                    <h2 class="text-3xl font-extrabold sm:text-4xl">Find Your Academic Data</h2>
                    <ul class="w-full text-md text-gray-600">
                        <li class="mt-1.5">Apply your Recognition Data to Academic </li>
                        <li class="mt-1.5">Find and Apply your Location KP Data to Academic</li>
                        <li class="mt-1.5">Find and Create your Report of Location KP and Recognition </li>
                    </ul>

                    <a href="#dospems"
                        class="mt-4 inline-block rounded bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                        List Data Dospem
                    </a>
                    @if (session('success'))
                        <div id="successMessage" class="absolute top-32 right-12 w-64 p-4 bg-green-200 rounded-xl">
                            {{ session('success') }}
                        </div>
                    @endif

                </div>

                {{-- <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="#">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Accountant</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="#">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Accountant</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="#">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Accountant</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="#">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Accountant</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="#">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Accountant</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>

                    <a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="#">
                        <span class="inline-block rounded-lg bg-gray-50 p-3">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </span>

                        <h2 class="mt-2 font-bold">Accountant</h2>

                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </a>
                </div> --}}
            </div>
            <div class="w-full flex justify-center mt-8">
                <div class="w-full border border-black">
                    <div class="py-4 overflow-x-auto">
                        <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                            <thead class="ltr:text-left rtl:text-right">
                                <tr>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Supervisor Title
                                    </th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Student Name</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Student NIM</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Student Prodi
                                    </th>
                                    {{-- include semester --}}
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Lecture Name</th>
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Lecture Department
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200" id="dospems">
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
                                            {{ $supervisor->lectures->lectureConcentration }}</td>
                                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 flex gap-2">
                                            <form method="POST"
                                                action="{{ route('applyDospem', ['aloc' => $supervisor->alocId]) }}"
                                                method="POST"
                                                class="inline-block rounded border border-indigo-600 bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                                                @csrf
                                                <button type="submit">Apply Dospem</button>
                                            </form>
                                            {{-- <form action="{{ route('applyDospem', ['aloc' => $supervisor->alocId]) }}"
                                                method="POST">@csrf
                                                <button type="submit">PPP</button>
                                            </form> --}}
                                            {{-- <form
                                                action="{{ route('admin.supervisor.delete.process', ['supervisedId' => $supervisor->alocId]) }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <button
                                                    class="inline-block rounded border border-indigo-600 bg-red-600 px-4 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                                                    Delete
                                                </button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{--
            <div id="dospems" class="w-full min-h-screen flex justify-center items-center"> dospem</div> --}}
        </div>
    </section>
</x-app-layout>
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
