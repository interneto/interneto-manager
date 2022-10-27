@props(['text', 'icon', 'url'])

<li>
    <a href="{{$url}}" class="nav-link text-white">
        <i class="{{$icon}}"></i>
        {{$text}}
    </a>
</li>
