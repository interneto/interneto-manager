<x-manager-layout>
    <x-layout-admin.header.header />
    <x-layout-admin.menu.menu />

    <div>
        <a href="{{route('new-link-form')}}">
            <button type="button" class="btn btn-outline-primary float-right">Create link
            </button>
        </a>
    </div>

    <div>
        <a href="{{route('new-directory-form')}}">
            <button type="button" class="btn btn-outline-primary float-right">Create directory
            </button>
        </a>
    </div>

    <div>
        @foreach ($directories as $directory)
        <div>
            <h2>{{$directory->name}}</h2>
            @foreach ($directory->links as $link)
            <div class="item">
                <div class="thumbnail">Thumbnail: {{$link->thumbnail}}</div>
                <div class="title">Title: {{$link->name}}</div>
                <div class="description">Description: {{$link->description}}</div>
                <div class="link">Link: {{$link->link}}</div>
                <div class="tags">Tag: {{$link->tag}}</div>
                <div class="time-saved">Time saved: {{$link->timestamp}}</div>
            </div>
            @endforeach
        </div>

        @endforeach
    </div>

</x-manager-layout>
