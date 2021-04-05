@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Location</h1>
        </div>
        <div class="section-body">
          <h2 class="section-title">List Location</h2>
          <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header">
                  <a href="{{route('location.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Location</a>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Location Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($items as $index => $location)
                      <tr>
                        <th scope="row">{{$index + $items->firstItem()}}</th>
                        <td>{{$location->name}}</td>
                        <td>
                          <a href="{{route('location.edit', $location->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a>
                          <a href="#Deletemodal"
                                        data-remote="{{route('location.show', $location->id)}}" 
                                        data-toggle="modal"
                                        data-target="#Deletemodal"
                                        data-title="Delete Location"
                                        class="bnt btn-danger btn-sm">
                                    <i class="fa fa-trash"></i> Delete</a>
                        </td> 
                      </tr>
                      
                      @empty
                    <tr>
                        <td colspan="3" class="text-center">
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
    </section>
  </div>      
@endsection
  