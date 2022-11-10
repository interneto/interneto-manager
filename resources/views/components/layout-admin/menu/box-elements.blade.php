@props(["directories"])


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

<div>
    <div class="item">
        <div class="thumbnail"></div>
        <div class="title"></div>
        <div class="description"></div>
        <div class="link"></div>
        <div class="tags"></div>
        <div class="time-saved"></div>
    </div>
</div>
