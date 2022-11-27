<x-layout-manager :directories="$directories">
    <x-layout-user.header />

    <div class="mx-2 my-4">
        <a href="{{route('create-link')}}">
            <button type="button" class="btn btn-outline-primary float-right">
                Create link
            </button>
        </a>
        <a href="{{route('create-directory')}}">
            <button type="button" class="btn btn-outline-primary float-right">
                Create directory
            </button>
        </a>
        <a href="">
            <button type="button" class="btn btn-outline-primary float-right">
                Create tag
            </button>
        </a>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($directories as $directory)
            @foreach ($directory->links as $link)
            <div class="col">
                <div class="card shadow-sm">
                    <!--
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    -->
                    <div class="card-body">
                        <p class="card-text">{{$link->name}}</p>
                        <p class="card-text">{{$link->description}}</p>
                        <a href="{{$link->uri}}">{{$link->uri}}</a>
                        <p class="card-text">{{$link->tag}}</p>
                        <p class="card-text">{{$directory->name}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button> 
                                <a class="btn btn-outline-secondary" href="{{route('create-link', ['id'=>$link->id])}}" role="button"></a>
                                <button type="button" class="btn btn-sm btn-outline-secondary" alt="trash"><i class="bi bi-trash"></i></button>
                            </div>
                            <small class="text-muted">{{$link->created_at}}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endforeach
    </div>

</x-layout-manager>
