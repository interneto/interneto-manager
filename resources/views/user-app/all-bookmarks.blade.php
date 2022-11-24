<x-layout-manager>
    <x-layout-user.header />

    <div class="mx-2 my-4">
        <a href="{{route('new-link-form')}}">
            <button type="button" class="btn btn-outline-primary float-right">
                Create link
            </button>
        </a>
        <a href="{{route('new-directory-form')}}">
            <button type="button" class="btn btn-outline-primary float-right">
                Create directory
            </button>
        </a>
    </div>

    <div>
        @foreach ($directories as $directory)
        <div>
            
            @foreach ($directory->links as $link)
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" style="--darkreader-inline-fill: #464c4f;" data-darkreader-inline-fill=""></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em" style="--darkreader-inline-fill: #e8e5e1;" data-darkreader-inline-fill="">{{$link->thumbnail}}</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">{{$link->name}}</p>
                            <p class="card-text">{{$link->description}}</p>
                            <p class="card-text">{{$link->uri}}</p>
                            <p class="card-text">{{$link->tag}}</p>
                            <p class="card-text">{{$directory->name}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">{{$link->created_at}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @endforeach
    </div>

</x-layout-manager>
