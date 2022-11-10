@props(["directories"])


<div>
    @foreach ($directories as $directory)
        <div>
            <h2>{{$directory->name}}</h2>
            @foreach ($directory->webs as $web)
            <div class="item">
                <div class="thumbnail">Thumbnail: {{$web->thumbnail}}</div>
                <div class="title">Title: {{$web->name}}</div>
                <div class="description">Description: {{$web->description}}</div>
                <div class="link">Link: {{$web->web}}</div>
                <div class="tags">Tag: {{$web->tag}}</div>
                <div class="time-saved">Time saved: {{$web->timestamp}}</div>
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
