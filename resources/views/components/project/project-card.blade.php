<div class="card group second-bg p-2 shadow-lg transition-transform transform hover:-translate-y-2 hover:shadow-2xl">
    <div class="">
        {{-- <img src="{{ asset('assets/img/project/project-presstix.jpg') }}" alt="PressTix"
            class="w-full rounded-lg object-cover"> --}}
        <img src="{{ $project->thumbnail }}" alt="PressTix" class="w-full rounded-lg object-cover">
    </div>
    <div class="p-5 bg-white rounded-lg my-2 ">
        <h5 class="text-xl font-bold text-gray-800 mb-3">{{ $project->name }}</h5>
        <div class="flex flex-wrap gap-2">
            @foreach ($project->skills as $skill)
                <button
                    class="inline-block px-6 py-2 second-bg text-white rounded-lg hover:opacity-[80%] transition duration-300">
                    {{ $skill->name }}
                </button>
            @endforeach
        </div>
        <p class="text-gray-600 leading-relaxed mt-4"> {{ $project->description }}</p>

        <button type="button" id='openVideoDemo'
            class="inline-block px-6 py-2 rounded-lg float-right second-bg text-white my-2 hover:opacity-[80%]"
            data-bs-toggle="modal" data-bs-target="#modalVideo">
            Video Demo
        </button>
    </div>
</div>


<div class="modal fade" id="modalVideo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-black">Video PressTix</h1>
            </div>
            <div class="modal-body">
                <iframe id='videoIframe' width="100%" height="500"></iframe>
            </div>



            <button id='closeVideoDemo' type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const videoUrl = "{{ str_replace('watch?v=', 'embed/', $project->video) }}";

        const iframe = document.getElementById('videoIframe');
        const openVideoDemo = document.getElementById('openVideoDemo');
        const closeVideoDemo = document.getElementById('closeVideoDemo');

        openVideoDemo.addEventListener('click', () => {
            iframe.src =
                'https  ://youtu.be/k-xAom7BB5o';
        });

        closeVideoDemo.addEventListener('click', () => {
            iframe.src = '';
        });
    });
</script>
