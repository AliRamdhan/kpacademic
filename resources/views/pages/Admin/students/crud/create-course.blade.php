<x-admin-layout>

    <div class="mx-auto max-w-screen-xl py-8">
        {{-- px-4 py-16 sm:px-6 lg:px-8 --}}
        <div class="mx-auto w-full">
            <h1 class="text-2xl font-bold sm:text-3xl">Create New Courses</h1>

            <p class="mt-2 text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br /> Et libero nulla eaque error neque
                ipsa culpa autem, at itaque nostrum!
            </p>
        </div>

        <form action="{{ route('admin.course.form.process') }}" method="post" class="mx-auto mb-0 mt-8 w-full space-y-4">
            @csrf
            <div class="w-full flex flex-col gap-y-4">
                <div class="w-full flex flex-col lg:flex-row gap-x-4">
                    <div class="flex-1">
                        <label for="coursesName" class="sr-only">Course Name</label>
                        <div class="relative">
                            <input type="text" name="coursesName"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                placeholder="Enter Course Name" />
                        </div>
                    </div>
                    <div class="flex-1">
                        <label for="coursesSKS" class="sr-only">Student Nim</label>
                        <div class="relative">
                            <input type="text" name="coursesSKS"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                placeholder="Enter Course SKS" />


                        </div>
                    </div>
                </div>
                {{-- <div class="w-full flex flex-col lg:flex-row gap-x-4">
                    <div class="flex-1">
                        <label for="coursesDate" class="sr-only">Name</label>
                        <div class="relative">
                            <input type="text" name="coursesDate"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                placeholder="Enter Course Date" />
                        </div>
                    </div>
                    <div class="flex-1">
                        <label for="coursesLecture" class="sr-only">Lecture</label>
                        <div class="relative">
                            <input type="text" name="coursesLecture"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                placeholder="Enter Course Lecture" />
                        </div>
                    </div>
                </div> --}}
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-x-4 pt-4">
                    <div></div>
                    <div class="w-full flex justify-end">
                        <button type="submit"
                            class="w-1/2 inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
                            Submit
                        </button>
                    </div>
                </div>
        </form>
    </div>
</x-admin-layout>
