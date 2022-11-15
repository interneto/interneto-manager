<x-layout>
    <x-layout-admin.header.header />
    <x-layout-admin.menu.menu />

    <form action="{{ route('new-directory-form') }}" method="post">
        @csrf
        <div>
            <input type="text" class="form-control h-100" name="directory" id="directory" placeholder="Directory" value="{{ old('directory') }}">
        </div>
        <button type="submit" class="btn btn-primary">Create directory</button>
    </form>

    <br>

</x-layout>
