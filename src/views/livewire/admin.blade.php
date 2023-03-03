<div>
    <x-slot name="title">
        {{ __('Admins') }}
    </x-slot>
    <x-admin::contents.admin.modal />


    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Admin</h4>
                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Create</button>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Roles</th>
                                <th>Alias</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
