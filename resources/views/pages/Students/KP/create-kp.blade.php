<x-app-layout>

    <div class="mx-auto max-w-screen-xl flex justify-center px-4 py-6 sm:px-6 lg:px-8">
        <div class="max-w-xl border rounded-lg p-4 shadow-lg">
            <div class="mx-auto w-full text-center">
                <h1 class="text-2xl font-bold sm:text-3xl">Make application for your KP Allocation!!</h1>

                <p class="mt-4 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque
                    ipsa culpa autem, at itaque nostrum!
                </p>
            </div>

            <form action="{{ route('student.application.kp.process') }}" enctype="multipart/form-data" method="post"
                class="mx-auto w-full mb-0 mt-8 space-y-4">
                @csrf
                <div>
                    <label for="locationName" class="sr-only">Location Name</label>

                    <div class="relative">
                        <input type="text" name="locationName"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter your location of your KP or Internship" />
                    </div>
                </div>
                <div>
                    <label for="locationReason" class="sr-only">Location Name</label>

                    <div class="relative">
                        <input type="text" name="locationReason"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter your reason location of your KP or Internship" />
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
    </div>
</x-app-layout>
