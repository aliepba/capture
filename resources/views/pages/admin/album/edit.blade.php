@extends('layouts.admin')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Album</h1>
        </div>
        <div class="section-body">
          <h2 class="section-title">Edit Album</h2>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card">
                  <div class="card-header">
                        <a href="{{route('album.index')}}" class="btn btn-warning"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
                  </div>

                  <div class="card-body">
                      <form action="{{route('album.update', $item->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name">Album Name</label>
                            <input type="text" name="name" class="form-control" value="{{$item->name}}" required >
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category_id" class="form-control">
                                <option value="{{$item->category_id}}">-- No Changes --</option>
                                @foreach ($categories as $item)
                                    <option value="{{$item->id}}">
                                        {{$item->category}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <select name="locations_id" class="form-control">
                                <option value="{{$item->locations_id}}">-- No Changes --</option>
                                @foreach ($locations as $items)
                                    <option value="{{$items->id}}">
                                        {{$items->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="descriptions">Description</label>
                          <textarea name="description" id="description" class="form-control">{{$item->description}}</textarea>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-success btn-md">Save</button>
                      </form>
                  </div>
            </div>
          </div>
        </div>
    </section>
  </div>    
@endsection 