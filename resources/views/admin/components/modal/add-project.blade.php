<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/add-project" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-2">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="my-2">
                        <label for="name">Description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="my-2">
                        <label for="name">Skill</label>
                        <div id="skills-list" class='flex gap-5'>
                        </div>

                        <input type="hidden" id='skillProject' name='skill'>
                    </div>
                    <div class="my-2">
                        <label for="name">Link Demo</label>
                        <input type="text" class="form-control" name="video">
                    </div>

                    <div class="my-2">
                        <label for="thumbnail-add-project">Thumbnail</label>
                        <input type="file" class="form-control" id="thumbnail-add-project" name="thumbnail"
                            onchange="previewImage(event)">

                        <img id="thumbnailProject"
                            style="max-width: 600px; max-height: 300px; margin-top: 10px;">
                    </div>
                    <button type="submit" id='btnAddProject' class=" btn btn-primary float-right">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script src={{ asset('assets/admin/js/project.js') }}></script>