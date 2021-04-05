<div class="container">
<div class="row">
    <div class="text-center">
    <p>Are you sure want to delete, {{$item->category}} ?
    </p>
    </div>
</div>
<div class="row">
    <form action="{{route('category.destroy', $item->id)}}" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-block btn-danger">Yes</button>
    </form>
</div>
</div>