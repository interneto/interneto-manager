<x-layout-manager :directories="$directories">

    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    <form action="{{ route('create-tag') }}" method="post">
        @csrf

        <div>
            <input type="text" class="form-control h-100" name="name" id="name" placeholder="Tag" value="{{ old('name') }}">
        </div>
        <button type="submit" class="btn btn-primary">Create tag</button>
    </form>

    <br>

</x-layout-manager>