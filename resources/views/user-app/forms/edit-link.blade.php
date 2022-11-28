<x-layout-manager :directories="$directories">
    <x-layout-user.header />

    <form action="{{ route('show-link)', $directory->id) }}" method="post">
        @csrf
        @method('patch')

        <select name="directory_id" id="directory_id" class="form-select">
            <option value="">-- Select a directory --</option>
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

</x-layout-manager>
