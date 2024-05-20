<x-app-layout>

    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-xl border text-center">
            <h1 class="text-2xl font-bold sm:text-3xl">Make application for your KP Allocation!!</h1>

            <p class="mt-4 text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque
                ipsa culpa autem, at itaque nostrum!
            </p>
        </div>

        <form action="{{route('student.application.kp.process')}}" enctype="multipart/form-data" method="post" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
            @csrf
            <div>
                <label for="email" class="sr-only">Location Name</label>

                <div class="relative">
                    <input type="text" name="locationName"
                        class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Enter your location of your KP or Internship" />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </span>
                </div>
            </div>

            <div>
                <label for="locationProof" class="sr-only">Location Proof</label>

                <div class="relative">
                    <input type="file" name="locationProof"
                        class="w-full rounded-lg border border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        placeholder="Enter your proof location" />
                </div>
            </div>

            <div class="w-full flex justify-end">
                <button type="submit"
                    class="w-1/2 inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
