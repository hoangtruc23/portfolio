<div class="flex flex-col items-center py-12">
    <h1 id="project" class="title-section">
        Project
        <span class="block w-16 h-1 bg-blue-500 mx-auto mt-2"></span>
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4 md:px-8">



        @foreach ($projects as $project)
            @include('components.project.project-card', $project)
        @endforeach
    </div>
</div>
