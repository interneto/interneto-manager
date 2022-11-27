<x-layout-manager :directories="$directories">
    <x-layout-user.header />

    <form action="{{ route('create-tag') }}" method="post">
        @csrf

        <select name="tag_id" id="tag_id" class="form-select">
            <option value="">-- Select a directory --</option>
            @foreach ($tags as $tag)
            <option value="{{ $tag->id }}" {{ $tag->id == old('tag_id') ? 'selected' : '' }}>
                {{ $tag->name }}
            </option>
            @endforeach
        </select>

        <div>
            <input type="text" class="form-control h-100" name="name" id="name" placeholder="Tag" value="{{ old('name') }}">
        </div>
        <button type="submit" class="btn btn-primary">Create tag</button>
    </form>

    <br>

</x-layout-manager>