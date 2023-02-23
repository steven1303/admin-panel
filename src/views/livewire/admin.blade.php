<x-admin::contents.admin.modal />
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Admin</h4>
            <p class="card-description">
                List Admin
            </p>
            {{-- <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Info</button> --}}
            <button type="button" class="btn btn-info" wire:click="openModalAdminCreate"
                wire:loading.attr="disabled">Create</button>
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

{{-- @push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addStudentModal').modal('hide');
            $('#editStudentModal').modal('hide');
            $('#deleteStudentModal').modal('hide');
        });
        window.addEventListener('show-edit-student-modal', event => {
            $('#editStudentModal').modal('show');
        });
        window.addEventListener('show-delete-confirmation-modal', event => {
            $('#deleteStudentModal').modal('show');
        });
        window.addEventListener('show-view-student-modal', event => {
            $('#viewStudentModal').modal('show');
        });
    </script>
@endpush --}}
