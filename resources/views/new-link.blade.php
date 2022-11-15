<x-layout>
    <x-layout-admin.header.header />
    <x-layout-admin.menu.menu />

    <form action="{{ route('new-link-form') }}" method="post">
        @csrf
        <div class="form-floating mb-3 h-100">
            <input type="text" class="form-control h-100" name="name" id="name" placeholder="Interneto.dev" value="{{ old('name') }}">
        </div>
        <div class="form-floating mb-3 h-100">
            <input type="text" class="form-control h-100" name="link" id="link" placeholder="https://interneto.dev/" value="{{ old('link') }}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Directory</span>
            <select name="directory_id" id="directory_id" class="form-select">
                <option value="">-- Selecciona una categoría --</option>
                @foreach ($directories as $directory)
                <option value="{{ $directory->id }}" {{ $directory->id == old('directory_id') ? 'selected' : '' }}>
                    {{ $directory->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <!--<label for="tag">Tag</label>-->
            <input class="form-control" type="text" name="tag" id="tag" placeholder="#tag" value="{{ old('tag') }}">
        </div>
        <br>
        <div>
            <!-- <label for="type">Type</label> -->
            <select name="type" id="type">
                <option value="audio">Audio</option>
                <option value="document">Document</option>
                <option value="image">Image</option>
                <option value="video">Video</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Create link</button>
    </form>

</x-layout>
