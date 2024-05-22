<section class="w-64 flex h-screen flex-col justify-between border-e bg-white">
    <div class="px-4 py-6">
        <span class="grid h-10 w-full place-content-center rounded-lg bg-gray-100 text-xs text-gray-600">
            Logo
        </span>

        <ul class="mt-6 space-y-1">
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="block rounded-lg bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700">
                    Dashboard
                </a>
            </li>

            <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                        class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                        <span class="text-sm font-medium"> Supervisor </span>

                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </summary>

                    <ul class="mt-2 space-y-1 px-4">
                        <li>
                            <a href="{{ route('admin.supervisor.all') }}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Supervisor All
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.supervisor.create') }}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Create Supervisor
                            </a>
                        </li>
                    </ul>
                </details>
            </li>

            <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                        class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                        <span class="text-sm font-medium"> Students </span>

                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </summary>

                    <ul class="mt-2 space-y-1 px-4">
                        <li>
                            <a href="{{ route('admin.student.all') }}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Students All
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.student.kp.all')}}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Student Conversion
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.student.recognition.all')}}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Student KP
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.student.account.all') }}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Student Accounts
                            </a>
                        </li>
                    </ul>
                </details>
            </li>


            <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                        class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                        <span class="text-sm font-medium"> Lectures </span>

                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </summary>

                    <ul class="mt-2 space-y-1 px-4">
                        <li>
                            <a href="{{ route('admin.lectures.all') }}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Lectures All
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.lecture.account.all') }}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Lectures Accounts
                            </a>
                        </li>
                    </ul>
                </details>
            </li>

            <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                        class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                        <span class="text-sm font-medium"> Recognition Courses </span>

                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </summary>

                    <ul class="mt-2 space-y-1 px-4">
                        <li>
                            <a href="{{route('admin.recognition.all')}}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Recognition All
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.recognition.approval.all')}}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Recognition Approval
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.recognition.reports.all')}}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Recognition Report
                                {{-- bukti pelaksanaan  --}}
                            </a>
                        </li>
                    </ul>
                </details>
            </li>

            <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                        class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                        <span class="text-sm font-medium"> KP </span>

                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </summary>

                    <ul class="mt-2 space-y-1 px-4">
                        <li>
                            <a href="{{route('admin.location.all')}}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                KP All
                            </a>
                        </li>

                        <li>
                            <a href="{{route('admin.location.approval.all')}}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                KP Approval
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.location.reports.all')}}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                KP Report
                                {{-- bukti pelaksanaan  --}}
                            </a>
                        </li>
                    </ul>
                </details>
            </li>

            <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                        class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                        <span class="text-sm font-medium"> Courses </span>

                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </summary>

                    <ul class="mt-2 space-y-1 px-4">
                        <li>
                            <a href="{{ route('admin.course.all') }}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Courses Activity
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.course.mbkm.all') }}"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                MBKM
                            </a>
                        </li>
                    </ul>
                </details>
            </li>

            <li>
                <details class="group [&_summary::-webkit-details-marker]:hidden">
                    <summary
                        class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                        <span class="text-sm font-medium"> Account </span>

                        <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </summary>

                    <ul class="mt-2 space-y-1 px-4">
                        <li>
                            <a href="#"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Details
                            </a>
                        </li>

                        <li>
                            <a href="#"
                                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                Security
                            </a>
                        </li>

                        <li>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full rounded-lg px-4 py-2 text-sm font-medium text-gray-500 [text-align:_inherit] hover:bg-gray-100 hover:text-gray-700">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>

    <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
        <a href="#" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
            <img alt=""
                src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                class="size-10 rounded-full object-cover" />

            <div>
                <p class="text-xs">
                    <strong class="block font-medium">Eric Frusciante</strong>

                    <span> eric@frusciante.com </span>
                </p>
            </div>
        </a>
    </div>
</section>
