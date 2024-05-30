<x-app-layout>

    <div class="mx-auto max-w-screen-xl flex justify-center items-center px-4 py-10 sm:px-6 lg:px-8">
        <div class="max-w-2xl border rounded-lg p-4 shadow-lg">
            <div class="mx-auto w-full text-center">
                <h1 class="text-2xl font-bold sm:text-3xl">Make application for your Recognition!!</h1>

                <p class="mt-4 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque
                    ipsa culpa autem, at itaque nostrum!
                </p>
            </div>

            <form action="{{ route('student.application.recognition.process') }}" enctype="multipart/form-data"
                method="post" class="mx-auto w-full mb-0 mt-8 space-y-4">
                @csrf
                <div>
                    <label for="recognitionName" class="sr-only">Recognition Name</label>

                    <div class="relative">
                        <input type="text" name="recognitionName"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter your recognition title" />
                    </div>
                </div>
                <div>
                    <label for="recognitionReason" class="sr-only">Recognition Reason</label>

                    <div class="relative">
                        <input type="text" name="recognitionReason"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter your recognition courses reason" />
                    </div>
                </div>
                <div class="w-full flex justify-between items-center gap-2">
                    {{-- <div class="relative w-full">
                        <select name="recognitionCourse" id="recognitionCourse"
                            class="w-full rounded-lg border-gray-200 px-4 py-3 pe-12 text-sm shadow-sm">
                            <option value="">Select Course</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->coursesId }}" class="text-base">
                                    <div class="flex gap-2">
                                        <p>{{ $course->coursesName }} </p>
                                        <p> NIM : {{ $course->coursesSKS }} </p>
                                    </div>
                                </option>
                            @endforeach
                        </select>
                    </div> --}}
                    {{-- <div class="w-full relative">
                        <label for="recognitionCourses" class="sr-only">Select Courses</label>
                        <select name="recognitionCourses[]" id="recognitionCourses" multiple
                            class="w-full rounded-lg border-gray-200 px-4 py-3 pe-12 text-sm shadow-sm">
                            <option value="" disabled>Select Courses</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->coursesId }}">{{ $course->coursesName }} (NIM:
                                    {{ $course->coursesSKS }})</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="w-full">
                        <label class="block text-sm font-medium text-gray-700" for="courses[]">Select Courses:</label>
                        <div class="mt-2 grid grid-cols-1 gap-y-4 gap-x-4 sm:grid-cols-2">
                            @foreach ($courses as $course)
                                <div class="flex items-center">
                                    <input id="course_{{ $course->coursesId }}" name="courses[]" value="{{ $course->coursesId }}" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    <label for="course_{{ $course->coursesId }}" class="ml-3 block text-sm font-medium text-gray-700">{{ $course->coursesName }} (NIM: {{ $course->coursesSKS }})</label>
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <div class="relative w-full">
                        <select name="recognitionActivity" id="recognitionActivity"
                            class="w-full rounded-lg border-gray-200 px-4 py-3 pe-12 text-sm shadow-sm">
                            <option value="">Select MBKM Activity</option>
                            @foreach ($mbkmcourses as $mbkm)
                                <option value="{{ $mbkm->mbkmCoursesId }}" class="text-base">
                                    <div class="flex gap-2">
                                        <p>{{ $mbkm->mbkmCoursesName }} </p>
                                        <p> {{ $mbkm->mbkmCoursesDuration }} </p>
                                    </div>
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <label for="recognitionProof" class="sr-only">Location Proof</label>

                    <div class="relative">
                        <input type="file" name="recognitionProof"
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
