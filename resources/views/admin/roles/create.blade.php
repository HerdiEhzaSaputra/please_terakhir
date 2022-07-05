<x-app-layout>
    <a class="justify-end" href="{{ url()->previous() }}">
        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                {{ trans('global.back_to_list') }}
        </button>
    </a>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ trans('global.create') }} {{ trans('cruds.role.title_singular') }}</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500"></p>
        </div>

        <div class="card-body">
            <form action="{{ route("admin.roles.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">{{ trans('cruds.role.fields.title') }}*</label>
                    <input type="text" id="name" name="name" class="form-input" value="{{ old('name', isset($role) ? $role->name : '') }}" required>
                    @if($errors->has('name'))
                        <em class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.role.fields.title_helper') }}
                    </p>
                </div>
                <div class="form-group {{ $errors->has('permissions') ? 'has-error' : '' }}">
                    <label for="permission">{{ trans('cruds.role.fields.permissions') }}*
                        <span class="form-btn-select btn-select-all">{{ trans('global.select_all') }}</span>
                        <span class="form-btn-select btn-deselect-all">{{ trans('global.deselect_all') }}</span>
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
                        {{ trans('cruds.role.fields.permissions_helper') }}
                    </p>
                </div>
                <div>
                    <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                </div>
            </form>


        </div>
    </div>
</x-app-layout>
