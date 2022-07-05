<x-app-layout>

    <x-slot name="title">
        {{ __('global.create') }} {{ __('cruds.role.title_singular') }}
    </x-slot>

    <a class="justify-end" href="{{ url()->previous() }}">
        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            {{ __('global.back') }}
        </button>
    </a>

    <div class="bg-gray-50 shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6 border-b">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ __('global.create') }} {{ __('cruds.role.title_singular') }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500"></p>
        </div>

        <div class="card-body">
            <form action="{{ route("admin.roles.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="bg-white w-full rounded-lg shadow-xl">
                    {{-- Nama Role --}}
                    <div class="{{ $errors->has('name') ? 'has-error' : '' }} md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <label for="name">{{ __('cruds.role.fields.title') }}*</label>
                        <input type="text" id="name" name="name" class="form-input" value="{{ old('name', isset($role) ? $role->name : '') }}" required>
                        @if($errors->has('name'))
                            <em class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ __('cruds.role.fields.title_helper') }}
                        </p>
                    </div>

                    {{-- Deskripsi Role --}}
                    <div class="{{ $errors->has('description') ? 'has-error' : '' }} md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <label for="description">{{ __('cruds.role.fields.description') }}</label>
                        <input type="text" id="description" name="description" class="form-input" value="{{ old('description', isset($role) ? $role->description : '') }}" required>
                        @if($errors->has('description'))
                            <em class="invalid-feedback">
                                {{ $errors->first('description') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ __('cruds.role.fields.description_helper') }}
                        </p>
                    </div>

                    {{-- Role Permissions --}}
                    <div class="{{ $errors->has('permission') ? 'has-error' : '' }} md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <label class="flex gap-2 justify-start" for="permission">
                            <span>{{ __('cruds.role.fields.permissions') }}*</span>
                            <span class="form-btn-select btn-select-all">{{ __('global.select_all') }}</span>
                            <span class="form-btn-select btn-deselect-all">{{ __('global.deselect_all') }}</span>
                        </label>
                        <select name="permission[]" id="permission" class="form-input select2" multiple="multiple" required>
                            @foreach($permissions as $id => $permissions)
                                <option value="{{ $id }}" {{ (in_array($id, old('permission', [])) || isset($role) && $role->permissions->contains($id)) ? 'selected' : '' }}>{{ $permissions }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('permission'))
                            <em class="invalid-feedback">
                                {{ $errors->first('permission') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ __('cruds.role.fields.permissions_helper') }}
                        </p>
                    </div>

                    <div class="flex justify-end p-4">
                        <button class="form-btn-submit" type="submit">{{ __('global.save') }}</button>
                    </div>

                </div>
            </form>


        </div>
    </div>
</x-app-layout>
