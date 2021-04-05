@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>
        </div>
        <div class="section-body">
          <h2 class="section-title">List Category</h2>
          <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header">
                  <a href="{{route('category.create')}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 0; ?>
                      @forelse ($items as $index => $category)
                      <?php  $no++ ?>
                      <tr>
                        <th scope="row">{{$index + $items->firstItem() }}</th>
                        <td>{{$category->category}}</td>
                        <td>
                          <a href="{{route('category.edit',$category->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i> Edit</a>
                          <a href="#mymodal"
                                        data-remote="{{route('category.show', $category->id)}}" 
                                        data-toggle="modal"
                                        data-target="#mymodal"
                                        data-title="Delete Category"
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