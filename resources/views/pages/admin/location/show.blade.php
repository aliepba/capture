<div class="container">
    <div class="row">
        <div class="text-center">
        <p>Are you sure want to delete, {{$item->name}} ?
        </p>
        </div>
    </div>
    <div class="row">
        <form action="{{route('location.destroy', $item->id)}}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-block btn-danger">Yes</button>
        </form>
    </div>
    </div>