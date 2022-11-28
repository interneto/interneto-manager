<x-layout-manager :directories="$directories">

    <div class="mt-5">
        <form action="{{ route('create-link') }}" method="post">
            @csrf
            <div class="mb-3">
                <input class="form-control" type="text" name="name" id="name" placeholder="link name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="uri" id="uri" placeholder="https://sub.domain.tld" value="{{ old('link') }}">
            </div>
            <div class="input-group mb-3">
                <select name="directory_id" id="directory_id" class="form-select">
                    <option value="">-- Select a directory --</option>
                    @foreach ($directories as $directory)
                    <option value="{{ $directory->id }}" {{ $directory->id == old('directory_id') ? 'selected' : '' }}>
                        {{ $directory->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div>
                <input class="form-control" type="text" name="tag" id="tag" placeholder="#tag" value="{{ old('tag') }}">
            </div>
            <button type="submit" class="btn btn-primary">Create link</button>
        </form>
    </div>

</x-layout-manager>
