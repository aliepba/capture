@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Albums</h1>
        </div>
        <div class="section-body">
          <h2 class="section-title">List Albums</h2>
          <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header">
                  <a href="{{route('album.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Gallerys</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table">
                    <thead class="text-center">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Album Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Location</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      @forelse ($items as $index => $album)
                      <tr>
                        <th scope="row">{{$index + $items->firstItem()}}</th>
                        <td>{{$album->name}}</td>
                        <td>{{$album->categories->category}}</td>
                        <td>{{$album->locations->name}}</td>
                        <td>{{$album->description}}</td>
                        <td>
                          <a href="{{route('album.edit', $album->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>
                          <form action="{{route('album.destroy', $album->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                          <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                          </form>
                          <a href="{{route('album.show', $album->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-search-plus"></i></a>
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
  