<x-layout>

    <x-layout-admin.header.header />

    <x-layout-admin.menu.menu />

    <form action="{{ route('create-link') }}" method="post">
        @csrf

        <div class="form-floating mb-3 h-100">
            <textarea class="form-control h-100" name="name" id="name" placeholder="Interneto.dev">{{ old('name') }}</textarea>
            <label for="short_description">Name</label>
        </div>

        <div class="form-floating mb-3 h-100">
            <textarea class="form-control h-100" name="link" id="link" placeholder="https://interneto.dev/">{{ old('link') }}</textarea>
            <label for="short_description">Link</label>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Directory</span>
            <select name="directory-id" id="directory-id" class="form-select">
                <option value="">-- Selecciona una categoría --</option>
                @foreach ($directories as $directory)
                    <option value="{{ $directory->id }}" {{ $directory->id == old('id_directory') ? 'selected' : '' }}>
                        {{ $directory->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <input class="form-control" type="text" name="tag" id="tag" placeholder="#tag"
                value="{{ old('tag') }}">
            <label for="tag">Tag</label>
        </div>

        <div>
            <label for="type">Type</label>
            <select name="type" id="type">
                <option value="audio">Audio</option>
                <option value="document">Document</option>
                <option value="image">Image</option>
                <option value="video">Video</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear link</button>
    </form>

    <x-layout-admin.menu.box-elements />

</x-layout>
