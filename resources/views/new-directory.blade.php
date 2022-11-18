<x-layout>
    <x-layout-admin.header.header />
    <x-layout-admin.menu.menu />

    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    <form action="{{ route('new-directory') }}" method="post">
        @csrf

        <select name="directory_id" id="directory_id" class="form-select">
            <option value="">-- Selecciona una categoría --</option>
            @foreach ($directories as $directory)
            <option value="{{ $directory->id }}" {{ $directory->id == old('directory_id') ? 'selected' : '' }}>
                {{ $directory->name }}
            </option>
            @endforeach
        </select>

        <div>
            <input type="text" class="form-control h-100" name="name" id="name" placeholder="Directory" value="{{ old('name') }}">
        </div>
        <button type="submit" class="btn btn-primary">Create directory</button>
    </form>

    <br>

</x-layout>
