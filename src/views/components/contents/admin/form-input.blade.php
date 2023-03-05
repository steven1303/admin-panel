@props(['idModal'])
@php
    $disabled = $errors->any() || empty($this->username) ? true : false;
@endphp
<x-admin::elements.modal :label="Admin" :idModal="$idModal">
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
</x-admin::elements.modal>