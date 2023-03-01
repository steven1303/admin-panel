<div>
    <x-slot name="title">
        {{ __('Admins') }}
    </x-slot>
    {{-- <x-admin::contents.admin.modal /> --}}

    <div class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form class="form-sample" wire:submit.prevent='store'>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Admin</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Username</label>
                                                <div class="col-sm-9">
                                                    <input type="text" wire:model.debounce.500ms="username"
                                                        class="form-control" name="username" id="username">
                                                </div>
                                                @error('username')
                                                    <label id="username-error" class="error mt-2 text-danger"
                                                        for="username">{{ $message }}</label>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            @error('email')
                                                <label id="email-error" class="error mt-2 text-danger"
                                                    for="email">{{ $message }}</label>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" wire:target='store' wire:loading.attr='disabled'
                            class="btn btn-primary mb-2">Submit</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
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
