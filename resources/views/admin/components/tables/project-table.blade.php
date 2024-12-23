<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Projects</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Project
            </button>

           @include('admin.components.modal.add-project')
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Thumbnail</th>
                            <th>Name</th>
                            <th>Skills</th>
                            <th>Video</th>
                            <th></th>
                        </tr>
                    </thead>
                  
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Edit Project
                                </button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Remove Project
                                </button>
                            </td>
                          
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
