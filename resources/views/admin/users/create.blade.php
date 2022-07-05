<x-app-layout>

    <x-slot name="title">
        {{ __('global.create') }} {{ __('cruds.user.title_singular') }}
    </x-slot>

    <a class="justify-end" href="{{ url()->previous() }}">
        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            {{ __('global.back') }}
        </button>
    </a>

    <div class="bg-gray-50 shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6 border-b">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ __('global.create') }} {{ __('cruds.user.title_singular') }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500"></p>
        </div>

        <div class="card-body">
            <form action="{{ route("admin.users.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="bg-white w-full rounded-lg shadow-xl">

                    {{-- Nama User --}}
                    <div class="{{ $errors->has('name') ? 'has-error' : '' }} md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <label for="name">{{ __('cruds.user.fields.name') }}*</label>
                        <input type="text" id="name" name="name" class="form-input" value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                        @if($errors->has('name'))
                            <em class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ __('cruds.user.fields.name_helper') }}
                        </p>
                    </div>

                    {{-- Email User --}}
                    <div class="{{ $errors->has('email') ? 'has-error' : '' }} md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <label for="email">{{ __('cruds.user.fields.email') }}*</label>
                        <input type="email" id="email" name="email" class="form-input" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                        @if($errors->has('email'))
                            <em class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ __('cruds.user.fields.email_helper') }}
                        </p>
                    </div>

                    {{-- Password --}}
                    <div class="{{ $errors->has('password') ? 'has-error' : '' }} md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <label for="password">{{ __('cruds.user.fields.password') }}</label>
                        <input type="password" id="password" name="password" class="form-input" required>
                        @if($errors->has('password'))
                            <em class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ __('cruds.user.fields.password_helper') }}
                        </p>
                    </div>

                    {{-- Konfirmasi Password --}}
                    <div class="{{ $errors->has('password_confirmation') ? 'has-error' : '' }} md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <label for="password">{{ __('cruds.user.fields.confirm_password') }}</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-input" required>
                        @if($errors->has('password'))
                            <em class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ __('cruds.user.fields.password_helper') }}
                        </p>
                    </div>

                    {{-- Roles User --}}
                    <div class="{{ $errors->has('roles') ? 'has-error' : '' }} md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <label class="flex gap-2 justify-start" for="roles">
                            <span>{{ __('cruds.user.fields.roles') }}*</span>
                            <span class="form-btn-select btn-select-all">{{ __('global.select_all') }}</span>
                            <span class="form-btn-select btn-deselect-all">{{ __('global.deselect_all') }}</span>
                        </label>
                        <select name="roles[]" id="roles" class="form-input select2" multiple="multiple" required>
                            @foreach($roles as $id => $roles)
                                <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('roles'))
                            <em class="invalid-feedback">
                                {{ $errors->first('roles') }}
                            </em>
                        @endif
                        <p class="helper-block">
                            {{ __('cruds.user.fields.roles_helper') }}
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
