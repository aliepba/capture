@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Gallery</h1>
        </div>
        <div class="section-body">
          <h2 class="section-title">List Gallery</h2>
          <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header">
                  <a href="{{route('gallery.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Gallerys</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table">
                    <thead class="text-center">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Album</th>
                        <th scope="col">Most Rated</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      @forelse ($items as $index => $gallery)
                      <tr>
                        <th scope="row">{{$index + $items->firstItem()}}</th>
                        <td><img src="{{Storage::url($gallery->image)}}" alt="" style="width: 100px" class="img-thumbnail" /></td>
                        <td>{{$gallery->albums->name}}</td>
                        <td>
                        @if ($gallery->most == 1)
                            <span class="badge badge-info">Yes</span>
                        @else
                            <span class="badge badge-success">No</ span>
                        @endif
                        </td>
                        <td>
                          <a href="{{route('gallery.edit', $gallery->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a>
                          <form action="{{route('gallery.destroy', $gallery->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                          <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                          </form>
                        </td> 
                      </tr>
                      @empty
                    <tr>
                        <td colspan="7" class="text-center">
                          <i class="fa fa-spinner"</i>  
                          Data Empty
                        </td>
                    </tr>
                      @endforelse
                    </tbody>
                  </table>
                  {{$items->links()}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>      
@endsection
  