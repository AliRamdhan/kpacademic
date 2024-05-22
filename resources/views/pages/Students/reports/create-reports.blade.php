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

            <form action="{{ route('student.application.reports.process') }}" method="post"
                class="mx-auto w-full mb-0 mt-8 space-y-4">
                @csrf
                <div>
                    <label for="reportTitle">Reports Title</label>

                    <div class="relative">
                        <input type="text" name="reportTitle"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter your title reports" />
                    </div>
                </div>
                <div>
                    <label for="reportType">Report Type</label>
                    <select id="reportType" name="reportType" required
                        class="w-full rounded-lg border-gray-200 px-4 py-3 pe-12 text-base shadow-sm">
                        <option value="">Select Type</option>
                        <option value="recognition">Recognition</option>
                        <option value="location">Location</option>
                    </select>
                </div>
                <div>
                    <div class="relative w-full" id="recognitionSelect" style="display: none;">
                        <select name="reportRecognition" id="reportRecognition"
                            class="w-full rounded-lg border-gray-200 px-4 py-3 pe-12 text-sm shadow-sm">
                            <option value="">Select Your Recognition</option>
                            @foreach ($recognitions as $recognition)
                                <option value="{{ $recognition->recognitionId }}">{{ $recognition->recognitionReason }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="relative w-full" id="locationSelect" style="display: none;">
                        <select name="reportKp" id="reportKp"
                            class="w-full rounded-lg border-gray-200 px-4 py-3 pe-12 text-sm shadow-sm">
                            <option value="">Select Your Reports</option>
                            @foreach ($locations as $location)
                                <option value="{{ $location->locationId }}">{{ $location->locationName }}</option>
                            @endforeach
                        </select>
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
<script>
    document.getElementById('reportType').addEventListener('change', function() {
        var recognitionSelect = document.getElementById('recognitionSelect');
        var locationSelect = document.getElementById('locationSelect');
        if (this.value === 'recognition') {
            recognitionSelect.style.display = 'block';
            locationSelect.style.display = 'none';
        } else if (this.value === 'location') {
            recognitionSelect.style.display = 'none';
            locationSelect.style.display = 'block';
        } else {
            recognitionSelect.style.display = 'none';
            locationSelect.style.display = 'none';
        }
    });
</script>
