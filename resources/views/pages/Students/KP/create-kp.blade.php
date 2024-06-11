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
                id="kp-form" class="mx-auto w-full mb-0 mt-8 space-y-4 relative">
                @csrf
                <div>
                    <label for="locationName" class="sr-only">Location Name</label>
                    <div class="relative">
                        <input type="text" name="locationName" id="locationName"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter your location of your KP or Internship" required />
                    </div>
                </div>
                <div>
                    <label for="locationReason" class="sr-only">Location Reason</label>
                    <div class="relative">
                        <input type="text" name="locationReason" id="locationReason"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                            placeholder="Enter your reason for the location of your KP or Internship" required />
                    </div>
                </div>
                <div>
                    <label for="locationProof" class="sr-only">Location Proof</label>
                    <div class="dropzone dz-message flex justify-center
                        items-center border-2 border-dashed border-gray-400 rounded py-10 cursor-pointer"
                        id="locationProofDropzone">
                        {{-- <span>Drag and drop a file here or click to upload</span> --}}
                    </div>
                </div>
                <div class="w-full flex justify-end mt-20">
                    <button type="button" id="submit-all"
                        class="w-1/2 inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
<script>
    // Initialize Dropzone on the specified element
    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone("#locationProofDropzone", {
        url: "{{ route('student.application.kp.process') }}", // The URL for the file upload
        autoProcessQueue: false,
        parallelUploads: 1,
        paramName: "locationProof", // The name that will be used to transfer the file
        addRemoveLinks: true,
        init: function() {
            var myDropzone = this;
            document.getElementById("submit-all").addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();

                // Append the form data to the Dropzone request
                var formData = new FormData(document.getElementById('kp-form'));
                myDropzone.on("sending", function(file, xhr, formData) {
                    formData.append("_token", "{{ csrf_token() }}");
                    formData.append("locationName", document.getElementById('locationName')
                        .value);
                    formData.append("locationReason", document.getElementById(
                        'locationReason').value);
                });

                // Process the queue
                myDropzone.processQueue();
            });

            myDropzone.on("success", function(file, response) {
                window.location.href = "/application/kp/all";
            });

            myDropzone.on("error", function(file, response) {
                console.log(response);
            });
        }
    });
</script>
