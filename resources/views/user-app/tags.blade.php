<x-layout-manager :directories="$directories">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($directories as $directory)



            <div class="col">
                    <div class="card-body">
                        <p>
                            <a href="{{url('/tags/'.$tag->id)}}" class="card-text">
                                {{$tags->name}}
                            </a>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-outline-secondary" href="{{$link->uri}}" role="button">View</button>
                                <a class="btn btn-outline-secondary" href="{{route('edit-tag', ['id'=>$link->id])}}" role="button">Edit</a>
                                <a class="btn btn-outline-secondary" href="{{route('delete-link', ['id'=>$link->id])}}" role="button"><i class="bi bi-trash"></i></a>
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
